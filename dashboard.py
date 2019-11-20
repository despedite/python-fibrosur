#  -------------------------------------------------------------------
#						  FIBROSUR ARGENTINA
#	Creado por Erik Bianco Vera, Ezequiel Palladino, y Tomás Yaciura
#			  para la Técnica 4, Programación en Python
# --------------------------------------------------------------------

from tkinter import *
from backend import	 Database

database = Database("productos.db")

class Window(object):
	def __init__(self,window):
		self.window = window
		self.window.wm_title("FibroSur Argentina")

		l1 = Label(window, text="Nombre del Producto")
		l1.grid(row=0, column=0)

		l2 = Label(window, text="Descripción")
		l2.grid(row=0, column=2)

		l3 = Label(window, text="Link a Mercado Libre")
		l3.grid(row=1, column=0)

		l4 = Label(window, text="Precio")
		l4.grid(row=1, column=2)
		
		l5 = Label(window, text="Link a imágen")
		l5.grid(row=2, column=0)

		self.nombre_text = StringVar()
		self.e1 = Entry(window, textvariable=self.nombre_text)
		self.e1.grid(row=0, column=1)

		self.desc_text = StringVar()
		self.e2 = Entry(window, textvariable=self.desc_text)
		self.e2.grid(row=0, column=3)

		self.link_text = StringVar()
		self.e3 = Entry(window, textvariable=self.link_text)
		self.e3.grid(row=1, column=1)

		self.precio_text = StringVar()
		self.e4= Entry(window, textvariable=self.precio_text)
		self.e4.grid(row=1, column=3)
		
		self.imagen_text = StringVar()
		self.e5= Entry(window, textvariable=self.imagen_text)
		self.e5.grid(row=2, column=1)

		self.list1 = Listbox(window, height=20, width=95)
		self.list1.grid(row=3, column=0, rowspan=6, columnspan=2)

		self.list1.bind('<<ListboxSelect>>', self.get_selected_row)

		# Añadir una scrollbar a la ventana para que se pueda bajar si hay más de 20 entradas
		sb1 = Scrollbar(window)
		sb1.grid(row=3, column=2, rowspan=24)
		self.list1.config(yscrollcommand=sb1.set)
		sb1.config(command=self.list1.yview)

		b1 = Button(window, text="Mirar todos", width=12, command=self.view_command)
		b1.grid(row=3, column=3)

		b2 = Button(window, text="Buscar producto", width=12, command=self.search_command)
		b2.grid(row=4, column=3)

		b3 = Button(window, text="Crear producto", width=12, command=self.add_command)
		b3.grid(row=5, column=3)

		b4 = Button(window, text="Actualizar selec.", width=12, command=self.update_command)
		b4.grid(row=6, column=3)

		b5 = Button(window, text="Eliminar selec.", width=12, command=self.delete_command)
		b5.grid(row=7, column=3)

		b6 = Button(window, text="Cerrar", width=12, command=window.destroy)
		b6.grid(row=8, column=3)


	def get_selected_row(self,event):	#Como esta funcion está pegada a la listbox, se necesita el parámetro "evento"
		try:
			index = self.list1.curselection()[0]
			self.selected_tuple = self.list1.get(index)
			self.e1.delete(0,END)
			self.e1.insert(END,self.selected_tuple[1])
			self.e2.delete(0, END)
			self.e2.insert(END,self.selected_tuple[2])
			self.e3.delete(0, END)
			self.e3.insert(END,self.selected_tuple[3])
			self.e4.delete(0, END)
			# No me acuerdo porque, pero el tema con e4 y e5 es que estan puestos medio mal, entonces la tupla seleccionada es 5 en e4 y 4 en e5.
			self.e4.insert(END,self.selected_tuple[5])
			self.e5.delete(0, END)
			self.e5.insert(END,self.selected_tuple[4])
		except IndexError:
			pass				#Si la listbox está vacia, este código no se va a ejecutar

	def view_command(self):
		self.list1.delete(0, END)  # Asegurate que todas las entradas en la Listbox estén vacias cada vez que presionemos el botón de Mirar todos
		for row in database.view():
			self.list1.insert(END, row)

	def search_command(self):
		self.list1.delete(0, END)
		for row in database.search(self.nombre_text.get(), self.desc_text.get(), self.link_text.get(), self.imagen_text.get(), self.precio_text.get()):
			self.list1.insert(END, row)

	def add_command(self):
		database.insert(self.nombre_text.get(), self.desc_text.get(), self.link_text.get(), self.imagen_text.get(), self.precio_text.get())
		self.list1.delete(0, END)
		self.list1.insert(END, (self.nombre_text.get(), self.desc_text.get(), self.link_text.get(), self.imagen_text.get(), self.precio_text.get()))

	def delete_command(self):
		database.delete(self.selected_tuple[0])
		self.view_command()

	def update_command(self):
		database.update(self.selected_tuple[0],self.nombre_text.get(), self.desc_text.get(), self.link_text.get(), self.imagen_text.get(), self.precio_text.get())
		self.view_command()

#Codigo para inicializar TkInter
window = Tk()
Window(window)

window.mainloop()
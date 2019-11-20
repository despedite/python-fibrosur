#!/usr/bin/env python
# -*- coding: utf-8 -*-
import tkinter as tk
from tkinter import ttk
class Application(ttk.Frame):
	def __init__(self, main_window):
		super().__init__(main_window)
		main_window.title("Fibrosur Argentina")
		main_window.configure(width=525, height=278)
		
		self.l1 = ttk.Label(self, text="Fibrosur Argentina", font=(None, 14))
		self.l2 = ttk.Label(self, text="Panel de Control")
		self.l3 = ttk.Label(self, text="Programa creado por Erik Bianco Vera, Ezequiel Palladino y Tomás Yaciura")
		self.bt1 = ttk.Button(self, text="Admin. productos", command=self.open_main)
		self.bt2 = ttk.Button(self, text="Contaduría")
		self.bt3 = ttk.Button(self, text="Manejo de stock")
		self.bt4 = ttk.Button(self, text="Clientela")
		
		self.bt1.config(state="normal")
		self.bt2.config(state="disabled")
		self.bt3.config(state="disabled")
		self.bt4.config(state="disabled")
		self.l3.config(foreground="gray")
		
		self.l1.place(x=181, y=50)
		self.l2.place(x=213, y=75)
		self.l3.place(x=60, y=200)
		self.bt1.place(x=60, y=140)
		self.bt2.place(x=180, y=140)
		self.bt3.place(x=270, y=140)
		self.bt4.place(x=380, y=140)
		
		self.place(relwidth=1, relheight=1)
		
	def open_main(self):
		main_window.destroy()
		import dashboard.py

main_window = tk.Tk()
app = Application(main_window)
app.mainloop()
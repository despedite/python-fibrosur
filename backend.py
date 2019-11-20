import sqlite3
class Database:
    def __init__(self,db):
        self.conn = sqlite3.connect(db)
        self.cur = self.conn.cursor()
        self.cur.execute("CREATE TABLE IF NOT EXISTS productos (id INTEGER PRIMARY KEY, nombre STRING, "
                    "desc STRING, link STRING, imagen STRING, precio INTEGER)")
        self.conn.commit()

    def insert(self,nombre, desc, link, imagen, precio):
        # El valor NULL es para que la ID pueda auto incrementarse tranquila
        self.cur.execute("INSERT INTO productos VALUES(NULL,?,?,?,?,?)", (nombre,desc,link,imagen,precio))
        self.conn.commit()


    def view(self):
        self.cur.execute("SELECT * FROM productos")
        rows = self.cur.fetchall()

        return rows

    def search(self,nombre="", desc="", link="", imagen="", precio=""):
        self.cur.execute("SELECT * FROM productos WHERE nombre = ? OR desc = ? OR link = ? OR imagen = ?"
                    "OR precio = ?", (nombre, desc, link, imagen, precio))
        rows = self.cur.fetchall()
        return rows

    def delete(self,id):
        self.cur.execute("DELETE FROM productos WHERE id = ?", (id,))
        self.conn.commit()

    def update(self,id, nombre, desc, link, imagen, precio):
        self.cur.execute("UPDATE productos SET nombre = ?, desc = ?, link = ?, imagen = ?, precio = ? WHERE id = ?", (nombre, desc, link, imagen, precio, id))
        self.conn.commit()

    #Acá se cierra la conexión a la base de datos si algo pasa. OoooOOOOooo.
    def __del__(self):
        self.conn.close()

import mysql.connector
from mysql.connector import errorcode

def connectionBD():

    try:

        cxn = mysql.connector.connect(user='root', password='', host='', database='VMW')
        
        if cxn:
            return cxn
        else:
            print("Error con la conexion")
    
    except mysql.connector.Error as err:

        if err.errno == errorcode.ER_ACCESS_DENIED_ERROR:
            print("Credenciales incorectas")



    
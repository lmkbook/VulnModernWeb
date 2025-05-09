from flask import Flask, request, jsonify
from markupsafe import escape
from connect import connectionBD

app = Flask(__name__)

@app.route("/login", methods=["POST"])
def login():
    if request.method != "POST":
        return jsonify({'fail': escape('Error valide los datos y vuelva a intenar')})
    else:
        if not request.get_json:
            return jsonify({'fail': escape('La respuesta no es un json')})
        else:
            datos = request.get_json()
            user = escape(datos['user'])
            password = escape(datos['password'])
            if user == '' or password == '':
                return jsonify({'fail': escape('Los campos son de caracter obligatorio')})
            else:
                bd = connectionBD()
                cur = bd.cursor()
                query = ("SELECT MD5(%s)")
                cur.execute(query, [password])
                res = cur.fetchone()
                if cur.rowcount <= 0:
                    return jsonify({'fail' : escape("No se encontro ningun resultado")})
                else:
                    Buscar_usuario = ("SELECT name, password FROM Users WHERE name = %s")
                    cur.execute(Buscar_usuario, [user])
                    Usuario_encontrado = cur.fetchone()
                    if cur.rowcount <= 0 or Usuario_encontrado[1] != res[0]:
                        return jsonify({'fail' : escape('Credenciales incorrectas')})
                    else:
                        #Redirigir a la pagina de inicio
                        return jsonify({'fail' : 'Credenciales correctas'})
if '__main__' == '__name__':
    app.run()
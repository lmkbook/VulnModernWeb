from flask import Flask, request, jsonify
app = Flask(__name__)

@app.route("/login", methods=["POST"])
def login():
    if request.method != "POST":
        return jsonify({'fail': 'Error valide los datos y vuelva a intenar'})
    else:
        if not request.get_json:
            return jsonify({'fail': 'La respuesta no es un json'})
        else:
            datos = request.get_json()
            if datos['user'] == '' or datos['password'] == '':
                return jsonify({'fail': 'Los campos son de caracter obligatorio'})
            else:
                return jsonify({'fail': 'Los campos estan correctamente'})

if '__main__' == '__name__':
    app.run()
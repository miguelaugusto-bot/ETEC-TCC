from flask import Flask
from flask_sqlalchemy import SQLAlchemy
from flask_script import Manager
from flask_migrate import Migrate, MigrateCommand
from config import ConfigClass
import os.path

# Definindo app
app = Flask(__name__)

# Trazendo configurações de app vindas de 'config.py'
app.config.from_object(ConfigClass)

# Pasta onde esta o banco de dados
basedir = os.path.abspath(os.path.dirname(__file__))

# Definindo O banco de dados
app.config['SQLALCHEMY_DATABASE_URI'] = 'sqlite:///' + os.path.join(basedir, 'storage.db')
db = SQLAlchemy(app)

# mostrando ao migrate, as variaveis app e o banco de dados
migrate = Migrate(app, db)

manager = Manager(app)
manager.add_command('db', MigrateCommand)

from app.models import TabelaCupom, FormCupom
from app.controllers import routes
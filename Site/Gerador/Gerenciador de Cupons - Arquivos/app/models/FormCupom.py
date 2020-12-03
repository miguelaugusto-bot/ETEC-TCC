from flask_wtf import FlaskForm
from wtforms import StringField, DateField
from wtforms.validators import DataRequired


# Definimos o formulario
class RegistroCupomForm(FlaskForm):
    cupom = StringField('cupom', validators=[DataRequired()])
    dataExpiracao = DateField('dataExpiracao', validators=[DataRequired()])
    valor = StringField('valor', validators=[DataRequired()])

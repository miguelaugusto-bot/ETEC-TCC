from app.app import db
import datetime


# Cupom Do banco de dados, ele é usado para definir de que forma os dados devem ser colocados no banco de dados
# O banco de dados é criado apartir dessa classe
class Cupons(db.Model):
    __tablename__ = 'cupons'

    id = db.Column(db.Integer, primary_key=True)
    cupom = db.Column(db.String(15), nullable=False)
    valor = db.Column(db.String(300), nullable=False)
    dataCriacao = db.Column(db.Date, default=datetime.datetime.utcnow())
    dataExpiracao = db.Column(db.Date, nullable=False)
    habilitado = db.Column(db.Boolean, default=True)

    # Definindo os valores do cupom
    def __init__(self, cupom, dataExpiracao, valor):
        self.cupom = cupom
        self.dataExpiracao = dataExpiracao
        self.valor = valor

    def __repr__(self):
        return "<cupom: {}, valor: {}, dataCriacao: {}, dataExpiracao: {}, habilitado: {}>".format(self.cupom,
                                                                                                   self.valor,
                                                                                                   self.dataCriacao,
                                                                                                   self.dataExpiracao,
                                                                                                   self.habilitado)

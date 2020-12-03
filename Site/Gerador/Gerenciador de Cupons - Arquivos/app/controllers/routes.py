from flask import render_template, redirect
from app.app import app, db
from app.models.FormCupom import RegistroCupomForm
from app.models.TabelaCupom import Cupons


# Pagina inicial
@app.route('/')
def home():
    return render_template('home.html')


# Pagina Criar Cupons
@app.route('/criar-cupom', methods=['POST', 'GET'])
def CriarCupom():
    form = RegistroCupomForm()
    # Instanciar o Formulario

    # Validar O Formulario
    if form.validate_on_submit():
        # Recebendo os valores do Formulario após o submit
        cupom = form.cupom.data
        valor = form.valor.data
        data = form.dataExpiracao.data

        # Criando um objeto com os valores recebidos
        novo_cupom = Cupons(cupom, data, valor)
        db.session.add(novo_cupom)

        # Salvando os valores no banco de dados
        db.session.commit()

    # Retornando para a pagina "Criar Cupom"
    return render_template('CriarCupom.html', form=form)


# Visualizar Cupons
@app.route('/visualizar-cupom')
def VisualizarCupom():

    # Buscando todos os Cupons do banco de dados para a visualização
    db.create_all()
    cupons = Cupons.query.all()
    return render_template('VisualizarCupom.html', cupons=cupons)


# delete do cupom
@app.route('/delete/<int:id>')
def delete(id):

    # Buscando Cupom Pelo ID
    cupom = Cupons.query.get(id)
    db.session.delete(cupom)

    # Salvando Alteração
    db.session.commit()
    return redirect('/visualizar-cupom')

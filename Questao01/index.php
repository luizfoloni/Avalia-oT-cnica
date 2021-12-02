<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.0.0.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.4.0/moment.min.js"></script>

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

        <title>Questão 01</title>
    </head>
    <body>
        <br />
        <br />
        <div class="container">
            <center><h1 style="font-family: Verdana;">Formulário de Inscrição</h1></center>
            <br />
            <br />
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label"><b>Nome Completo</b></label>
                <input type="text" class="form-control" id="nome_completo" required placeholder="Digite seu nome completo" />
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label"><b>CPF</b></label>
                <input type="text" class="form-control" id="cpf1" maxlength="11" required placeholder="Digite seu CPF" onblur="return verificarCPF(this.value)" />
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label"><b>E-mail</b></label>
                <input type="email" class="form-control" id="email" required placeholder="Digite seu E-mail" />
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label"><b>Telefone</b></label>
                <input type="text" class="form-control" id="telefone" required placeholder="Digite seu Telefone" onkeypress="mask(this, mphone);" onblur="mask(this, mphone);" />
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label"><b>Possui Habilitação ?</b></label>
                <select id="habilitacao" onchange="exibir_ocultar(this)" class="form-control">
                    <option value=""></option>
                    <option value="sim">Sim</option>
                    <option value="nao">Não</option>
                </select>
            </div>
            <div class="mb-3">
                <div id="categoria" style="display: none;">
                    <label for="exampleFormControlInput1" class="form-label"><b>Qual categoria ?</b></label>
                    <input type="text" class="form-control" id="categoria" placeholder="Digite a sua categoria da Habilitação" />
                </div>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label"><b>Quais outros idiomas tem conhecimento ?</b></label>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios1" value="ingles" />
                    <label class="form-check-label" for="exampleRadios1">
                        Inglês
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios2" value="espanhol" />
                    <label class="form-check-label" for="exampleRadios2">
                        Espanhol
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios3" value="frances" />
                    <label class="form-check-label" for="exampleRadios3">
                        Francês
                    </label>
                </div>
            </div>

            <select id="pais" hidden></select>
            <div class="mb-3">
                <label id="campo_estado" class="form-label">
                    <b>
                        Estado
                        <select id="estado" class="form-control"></select>
                    </b>
                </label>
            </div>
            <div class="mb-3">
                <label id="campo_cidade" class="form-label">
                    <b>
                        Cidade
                        <select id="cidade" class="form-control"></select>
                    </b>
                </label>
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label"><b>CEP</b></label>
                <input type="text" class="form-control" id="cep" maxlength="9" placeholder="Digite seu CEP" required onchange="cep(this)" />
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label"><b>Logradouro</b></label>
                <input type="text" class="form-control" id="endereco" readonly />
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label"><b>Numero:</b></label>
                <input type="text" class="form-control" id="numero" />
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label"><b>Complemento:</b></label>
                <input type="text" class="form-control" id="complemento" />
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label"><b>Cargo Desejado :</b></label>
                <select id="cargo" class="form-control" required>
                    <option value=""></option>
                    <option value="diretor">Diretor</option>
                    <option value="gestor_ti">Gestor IT</option>
                    <option value="analista_sistemas">Analista de Sistemas</option>
                    <option value="analista_infra">Analista de Infra-Estrutura</option>
                    <option value="analista_seguranca">Analista de Segurança</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label"><b>Salario Proposto:</b></label>
                <input type="text" class="form-control" value="0" id="valor" onkeyup="formatarMoeda();" />
            </div>
            <br />
            <br />

            <center><h1 style="font-family: Verdana;">Tabela de Horário de Trabalho</h1></center>
            <br />
            <br />

            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Dia da Semana</th>
                            <th scope="col">Hora Início</th>
                            <th scope="col">Hora Fim</th>
                            <th scope="col">Tempo de Descanso (h)</th>
                            <th scope="col">Carga Horária (h)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>Segunda</th>
                            <td><input type="time" id="seg_inicio" /></td>
                            <td><input type="time" id="seg_fim" /></td>
                            <td><input type="number" id="seg_descanso" onchange="funcao(this.value)" /></td>
                            <td><input type="text" disabled id="result" /></td>
                        </tr>
                        <tr>
                            <th>Terça</th>
                            <td><input type="time" id="ter_inicio" /></td>
                            <td><input type="time" id="ter_fim" /></td>
                            <td><input type="number" id="ter_descanso" onchange="funcao(this.value)" /></td>
                            <td><input type="text" disabled id="result2" /></td>
                        </tr>
                        <tr>
                            <th>Quarta</th>
                            <td><input type="time" id="qua_inicio" /></td>
                            <td><input type="time" id="qua_fim" /></td>
                            <td><input type="number" id="qua_descanso" onchange="funcao(this.value)" /></td>
                            <td><input type="text" disabled id="result3" /></td>
                        </tr>
                        <tr>
                            <th>Quinta</th>
                            <td><input type="time" id="qui_inicio" /></td>
                            <td><input type="time" id="qui_fim" /></td>
                            <td><input type="number" id="qui_descanso" onchange="funcao(this.value)" /></td>
                            <td><input type="text" disabled id="result4" /></td>
                        </tr>
                        <tr>
                            <th>Sexta</th>
                            <td><input type="time" id="sex_inicio" /></td>
                            <td><input type="time" id="sex_fim" /></td>
                            <td><input type="number" id="sex_descanso" onchange="funcao(this.value)" /></td>
                            <td><input type="text" disabled id="result5" /></td>
                        </tr>
                        <tr>
                            <th colspan="4"><center>Carga Horária Semanal</center></th>
                            <td><input type="text" disabled id="result6" /></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <br />
            <br />

            <?php include("conta.js")?>
            <?php include("moeda.js")?>
            <?php include("cep.js")?>
            <?php include("uf.js")?>
            <?php include("habilitacao.js")?>
            <?php include("cpf.js")?>
            <?php include("telefone.js")?>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        </div>
    </body>
</html>

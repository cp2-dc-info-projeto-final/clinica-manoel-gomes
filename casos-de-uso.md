# Documento de Casos de Uso

## Lista dos Casos de Uso

 - [CDU 01](#CDU-01): Cadastro de Administradores.
 - [CDU 02](#CDU-02): Cadastro de Pacientes.
 - [CDU 03](#CDU-03): Cadastro de Médicos.
 - [CDU 04](#CDU-04): Login de Usuários.
 - [CDU 05](#CDU-05): Cadastro de Serviços.
 - [CDU 06](#CDU-06): Disponibilização de Datas e Horários.
 - [CDU 07](#CDU-07): Agendamento de Consultas.
 - [CDU 08](#CDU-08): Visualizar Perfil.

## Lista dos Atores

 - Administrador
 - Médico
 - Paciente

## Diagrama de Casos de Uso

<img src= "https://user-images.githubusercontent.com/89115632/189499233-8b746fbc-ab03-4afb-b425-04d5be1e340c.png" width = 400px>

## Descrição dos Casos de Uso

### CDU 01

*Cadastro de Administradores.*

**Atores:** Administrador.

**Fluxo Principal**

1. Administrador clica em "Cadastrar Novo Administrador" na área de perfil.
2. Administrador é encaminhado para a página de cadastro de administrador.
3. Administrador preenche os campos com os dados necessários.
4. Administrador clica em "Realizar cadastro".
5. Sistema analisa as informações.
7. Os dados do Novo Administrador são inseridos no banco de dados.
8. O acesso à "Área do Administrador / Perfil" é concedido ao Novo Administrador.

### CDU 02

*Cadastro de Pacientes.*

**Atores:** Paciente.

**Fluxo Principal**

1. Paciente clica em "Cadastre-se" na página inicial.
2. Paciente é encaminhado para a página de cadastro de pacientes.
3. Paciente insere as informações solicitadas: nome completo, CPF, data de nascimento, telefone, email e senha.
4. Paciente finaliza cadastro.
5. Sistema analisa as informações.
6. Sistema registra as informações no banco de dados.

**Fluxo Alternativo A**

1. Paciente clica em "Cadastre-se" na página inicial.
2. Paciente é encaminhado para a página de cadastro de pacientes.
3. Paciente insere as informações solicitadas: nome completo, CPF, data de nascimento, telefone, email e senha.
4. Paciente finaliza cadastro.
5. Sistema analisa as informações.
6. As seguintes informações já estão cadastradas: CPF, telefone ou email.
7. Sistema exibe mensagem informando o problema.
8. Paciente repete o processo de cadastro.

### CDU 03

*Cadastro de Médicos.*

**Atores:** Administrador.

**Fluxo Principal**

1. Administrador clica em "Cadastrar Médico" na área de perfil.
2. Administrador é encaminhado para a página de cadastro de médicos.
3. Administrador insere as informações solicitadas: nome completo, CRM, especialidade, telefone, email e senha.
4. Administrador finaliza cadastro.
5. Sistema analisa as informações.
6. Sistema registra as informações no banco de dados.

**Fluxo Alternativo A**

1. Administrador clica em "Cadastrar Médico" na área de perfil.
2. Administrador é encaminhado para a página de cadastro de médicos.
3. Administrador insere as informações solicitadas: nome completo, CRM, especialidade, telefone, email e senha.
4. Administrador finaliza cadastro.
5. Sistema analisa as informações.
6. As seguintes informações já estão cadastradas: CRM, telefone ou email.
7. Sistema exibe mensagem informando o problema.
8. Administrador repete o processo de cadastro.

### CDU 04

*Login de Usuários.*

**Atores:** Paciente, Médico e Administrador.

**Fluxo Principal**

1. Usuário clica em "Login" na página inicial.
2. Usuário é encaminhado para a página de login.
3. Usuário insere as informações solicitadas:

**Paciente**
- CPF e Senha.

**Médico**
- CRM e Senha.

**Administrador**
- Nome de usuário e Senha.

4. Sistema analisa as informações.
5. Sistema libera acesso.
6. Sistema exibe mensagem: "Login Conluído"

**Fluxo Alternativo A**

1. Paciente clica em "Login" na página inicial.
2. Paciente é encaminhado para a página de login.
3. Paciente insere as informações solicitadas.
4. Sistema analisa as informações.
5. A seguinte informação não está cadastrada: CPF.
6. Sistema exibe mensagem informando o problema: "Usuário Não Cadastrado".
7. Paciente é encaminhado para a página de cadastro.

**Fluxo Alternativo B**

1. Administrador/Médico clica em "Login" na página inicial.
2. Administrador/Médico é encaminhado para a página de login.
3. Administrador/Médico insere as informações solicitadas.
4. Sistema analisa as informações.
5. A seguinte informação não está cadastrada:

**Administrador**
- Nome de Usuário.

**Médico**
- CRM.

7. Sistema nega acesso.
8. Sistema exibe mensagem informando o problema: "Usuário Não Cadastrado".

**Fluxo Alternativo C**

1. Usuário clica em "Login" na página inicial.
2. Usuário é encaminhado para a página de login.
3. Usuário insere as informações solicitadas.
4. Sistema analisa as informações.
5. A senha informada está incorreta.
6. Sistema exibe mensagem informando o problema: "Senha Inválida".
7. Usuário repete o processo de login.

### CDU 05

*Cadastro de Serviços.*

**Atores: Administrador.**

**Fluxo Principal**

1. Administrador clica em "Cadastrar Especialidades" na área de perfil.
2. Administrador é encaminhado para a página de cadastro de especialidades.
3. Administrador insere especialidades disponíveis.
4. Administrador envia informações.
5. Sistema analisa as informações.
6. Sistema registra as informações no banco de dados.
7. Calendário de agendamentos é atualizado.

**Fluxo Alternativo A**

1. Administrador clica em "Cadastrar Especialidades" na área de perfil.
2. Administrador é encaminhado para a página de cadastro de especialidades.
3. Administrador insere especialidades disponíveis.
4. Administrador envia informações.
5. Sistema analisa as informações.
6. A especialidade inserida já está cadastrada.
7. Sistema não permite a operação.
8. Sistema exibe mensagem informando o problema.

### CDU 06

*Disponibilização de Datas e Horários.*

**Atores: Administrador.**

**Fluxo Principal**

1. Administrador clica em "Cadastrar Datas e Horários" na área de perfil.
2. Administrador é encaminhado para a página de cadastro de datas e horários.
3. Administrador seleciona uma determinada especialidade.
4. Administrador insere datas disponíveis para a especialidade.
5. Administrador insere horários disponíveis para a especialidade.
6. Administrador envia informações.
7. Sistema analisa as informações.
8. Sistema registra as informações no banco de dados.
9. Calendário de agendamentos é atualizado.

**Fluxo Alternativo A**

1. Administrador clica em "Cadastrar Datas e Horários" na área de perfil.
2. Administrador é encaminhado para a página de cadastro de datas e horários.
3. Administrador seleciona uma determinada especialidade.
4. Administrador insere datas disponíveis para a especialidade.
5. Administrador insere horários disponíveis para a especialidade.
6. Administrador envia informações.
7. Sistema analisa as informações.
8. O horário inserido já está cadastrado ou já possui um agendamento.
9. Sistema não permite a operação.
10. Sistema exibe mensagem informando o problema.

### CDU 07

*Agendamento de Consultas.*

**Atores:** Paciente.

**Fluxo Principal**

1. Paciente clica em "Agendar Consulta" na página inicial.
2. Paciente é encaminhado para a página de agendamento.
3. Paciente escolhe especialidade, data e horário disponível.
4. Paciente finaliza agendamento.
5. Sistema analisa as informações.
6. Sistema registra dados.
7. O horário selecionado não ficará disponível para outros agendamentos.

**Fluxo Alternativo A**

1. Paciente clica em "Agendar Consulta" na página inicial.
2. Paciente é encaminhado para a página de agendamento.
3. Paciente escolhe especialidade, data e horário disponível.
4. Paciente finaliza agendamento.
5. Sistema analisa as informações.
6. Paciente não possui cadastro ou não está logado.
7. Sistema exibe mensagem informando o problema.
8. Paciente é direcionado para a página de cadastro/login.


### CDU 08

*Vizualizar Perfil.*

**Atores:** Paciente, Médico e Administrador.

**Fluxo Principal**

1. Usuário clica em "perfil".
2. Usuário é encaminhado para página de perfil.
3. Usuário tem acesso as respectivas informações:

**Paciente**
- Nome completo do paciente.
- CPF do paciente.
- Calendário com as informações de agendamento do cliente: data, horário, nome do médico, CRM e especialidade.

**Médico**
- Nome completo do médico.
- CRM do médico.
- Calendário com as informações de agendamento do médico: data, horário, nome do paciente.

**Administrador**
- Lista de Usuários.
- Calendário com todos os agendamentos.
- Cadastro de Médicos.
- Cadastro de Datas e Horários.
- Cadastro de Especialidades.

**Fluxo Alternativo A**

1. Usuário clica em "perfil".
2. Usuário é encaminhado para página de perfil.
3. Usuário não possui cadastro ou não está logado.
4. Sistema exibe mensagem informando o problema.
5. Usuário é encaminhado para a página de cadastro/login.

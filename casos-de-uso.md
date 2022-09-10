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

<img src= "https://user-images.githubusercontent.com/89115632/189178009-ab5c2748-6de9-4248-ae4e-ce9e0fda7546.png" width = 400px>

## Descrição dos Casos de Uso

### CDU 01

*Cadastro de Administradores.*

**Atores:** Administrador não cadastrado

**Fluxo Principal**

1. Usuário clica em "Cadastrar Novo Administrador" na página inicial.
2. O usuário é encaminhado para a página de cadastro de administrador.
3. O usuário preenche os campos com os dados necessários.
4. O usuário clica em "Realizar cadastro".
5. O sistema redireciona o usuário para uma página para confirmar os dados inseridos.
6.  O usuário clica em "Confirmar cadastro" caso os dados estejam corretos ou em "Corrigir dados" caso seja necessário corrigir algo.
7.  O usuário é redirecionado para "Área do Administrador".

**Fluxo Alternativo A**

### CDU 02

*Cadastro de Pacientes.*

**Atores:** Paciente.

**Fluxo Principal**

1. Paciente insere as informações solicitadas: nome completo, CPF, data de nascimento, telefone, email e senha.
2. Paciente finaliza cadastro.
3. Sistema analisa as informações.
4. Sistema registra dados.

**Fluxo Alternativo A**

1. Paciente insere as informações solicitadas: nome completo, CPF, data de nascimento, telefone, email e senha.
2. Paciente finaliza cadastro.
3. Sistema analisa as informações.
4. As seguintes informações já estão cadastradas: CPF, telefone ou email.
5. Sistema exibe mensagem informando o problema.
6. Paciente repete o processo de cadastro.

### CDU 03

*Cadastro de Médicos.*

**Atores:** Administrador.

**Fluxo Principal**

1. Administrador insere as informações solicitadas: nome completo, CRM, especialidade, telefone, email e senha.
2. Administrador finaliza cadastro.
3. Sistema analisa as informações.
4. Sistema registra dados.

**Fluxo Alternativo A**

1. Administrador insere as informações solicitadas: nome completo, CRM, especialidade, telefone, email e senha.
2. Administrador finaliza cadastro.
3. Sistema analisa as informações.
4. As seguintes informações já estão cadastradas: CRM, telefone ou email.
5. Sistema exibe mensagem informando o problema.
6. Administrador repete o processo de cadastro.

### CDU 04

*Login de Usuários.*

**Atores:** Paciente, Médico e Administrador.

**Fluxo Principal**

1. Usuário insere as informações solicitadas:

**Paciente**
- CPF e Senha.

**Médico**
- CRM e Senha.

**Administrador**
- Nome de usuário e Senha.

2. Sistema analisa as informações.
3. Sistema libera acesso.

**Fluxo Alternativo A**

1. Paciente insere as informações solicitadas.
2. Sistema analisa as informações.
3. A seguinte informação não está cadastrada: CPF.
4. Sistema exibe mensagem informando o problema.
5. Paciente é encaminhado para a página de cadastro.

**Fluxo Alternativo B**

1. Administrador/Médico insere as informações solicitadas.
2. Sistema analisa as informações.
3. A seguinte informação não está cadastrada: Nome de usuário/CRM.
4. Sistema nega acesso.
5. Sistema exibe mensagem informando o problema.

**Fluxo Alternativo C**

1. Usuário insere as informações solicitadas.
2. Sistema analisa as informações.
3. A senha informada está incorreta.
4. Sistema exibe mensagem informando o problema.
5. Usuário repete o processo de login.

### CDU 05

*Cadastro de Serviços.*

**Atores: Administrador.**

**Fluxo Principal**

1. Administrador insere especialidades disponíveis.
2. Administrador envia informações.
3. Sistema analisa as informações.
4. Sistema registra as informações no banco de dados.
5. Calendário de agendamentos é atualizado.

**Fluxo Alternativo A**

1. Administrador insere especialidades disponíveis.
2. Administrador envia informações.
3. Sistema analisa as informações.
4. A especialidade inserida já está cadastrada.
5. Sistema não permite a operação.
6. Sistema exibe mensagem informando o problema.

### CDU 06

*Disponibilização de Datas e Horários.*

**Atores: Administrador.**

**Fluxo Principal**

1. Administrador seleciona uma determinada especialidade.
2. Administrador insere datas disponíveis para a especialidade.
3. Administrador insere horários disponíveis para a especialidade.
4. Administrador envia informações.
5. Sistema analisa as informações.
6. Sistema registra as informações no banco de dados.
7. Calendário de agendamentos é atualizado.

**Fluxo Alternativo A**

1. Administrador seleciona uma determinada especialidade.
1. Administrador insere datas disponíveis para a especialidade.
2. Administrador insere horários disponíveis para a especialidade.
3. Administrador envia informações.
4. Sistema analisa as informações.
5. O horário inserido já está cadastrado ou já possui um agendamento.
6. Sistema não permite a operação.
7. Sistema exibe mensagem informando o problema.

### CDU 07

*Agendamento de Consultas.*

**Atores:** Paciente.

**Fluxo Principal**

1. Paciente escolhe especialidade, data e horário disponível.
2. Paciente finaliza agendamento.
3. Sistema analisa as informações.
4. Sistema registra dados.
5. O horário selecionado não ficará disponível para outros agendamentos.

**Fluxo Alternativo A**

1. Paciente escolhe especialidade, data e horário disponível.
2. Paciente finaliza agendamento.
3. Sistema analisa as informações.
3. Paciente não possui cadastro ou não está logado.
4. Sistema exibe mensagem informando o problema.
5. Paciente é direcionado para a página de cadastro/login.


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

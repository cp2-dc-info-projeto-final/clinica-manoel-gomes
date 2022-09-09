# Documento de Casos de Uso

## Lista dos Casos de Uso

 - [CDU 01](#CDU-01): Cadastro de Administrador.
 - [CDU 02](#CDU-02): Cadastro de Pacientes.
 - [CDU 03](#CDU-03): Cadastro de Médicos.
 - [CDU 04](#CDU-04): Login de Usuários.
 - [CDU 05](#CDU-05): Agendamento de Consultas.
 - [CDU 06](#CDU-06): Disponibilização de Horários.
 - [CDU 07](#CDU-07): Disponibilização de Serviços.
 - [CDU 08](#CDU-08): Visualização de Perfil.

## Lista dos Atores

 - Administrador
 - Médico
 - Paciente

## Diagrama de Casos de Uso

<img src= "https://user-images.githubusercontent.com/89115632/189178009-ab5c2748-6de9-4248-ae4e-ce9e0fda7546.png" width = 400px>

## Descrição dos Casos de Uso

### CDU 01

**Atores:**

**Fluxo Principal**

**Fluxo Alternativo A**

### CDU 02

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

**Atores:** Paciente.

**Fluxo Principal**

1. Paciente insere as informações solicitadas: CPF e senha.
2. Sistema analisa as informações.
3. Sistema libera acesso.

**Fluxo Alternativo A**

1. Paciente insere as informações solicitadas: CPF e senha.
2. Sistema analisa as informações.
3. A seguinte informação não está cadastrada: CPF.
4. Sistema exibe mensagem informando o problema.
5. Paciente é encaminhado para a página de cadastro.

**Fluxo Alternativo B**

1. Paciente insere as informações solicitadas: CPF e senha.
2. Sistema analisa as informações.
3. A senha informada está incorreta.
4. Sistema exibe mensagem informando o problema.
5. Paciente repete o processo de login.

### CDU 05

**Atores:** Paciente.

**Fluxo Principal**

1. Paciente escolhe especialidade, data e horário disponível.
2. Paciente finaliza agendamento
3. Sistema registra dados.

**Fluxo Alternativo A**

1. Paciente escolhe especialidade, data e horário disponível.
2. Paciente finaliza agendamento.
3. Paciente não possui cadastro ou não está logado.
4. Sistema exibe mensagem informando o problema.
5. Paciente é direcionado para a página de cadastro/login.

### CDU 06

**Atores:**

**Fluxo Principal**

**Fluxo Alternativo A**

### CDU 07

**Atores:**

**Fluxo Principal**

**Fluxo Alternativo A**

### CDU 08

**Atores:** Paciente, Médico e Administrador.

**Fluxo Principal**

1. Usuário clica em "perfil".
2. Usuário é encaminhado para página de perfil.
3. Usuário tem acesso a caledário com os seus respectivos agendamentos.

**Fluxo Alternativo A**

1. Usuário clica em "perfil".
2. Usuário é encaminhado para página de perfil.
3. Usuário não possui cadastro ou não está logado.
4. Sistema exibe mensagem informando o problema.
5. Usuário é encaminhado para a página de cadastro/login.

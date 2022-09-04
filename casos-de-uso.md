# Documento de Casos de Uso

## Lista dos Casos de Uso

 - [CDU 01](#CDU-01): Cadastro de Pacientes.
 - [CDU 02](#CDU-02): Cadastro de Médicos.
 - [CDU 03](#CDU-03): Login de Pacientes.
 - [CDU 04](#CDU-04): Login de Médicos.
 - [CDU 05](#CDU-05): Agendamento de Consultas.
 - [CDU 06](#CDU-06): Visualização de Perfil.
 - [CDU 07](#CDU-07): Visualização de Calendário/Grade Horária.


## Lista dos Atores

 - Administrador
 - Médico
 - Paciente

## Diagrama de Casos de Uso

![Diagrama de Casos de Uso] ![image](https://user-images.githubusercontent.com/111151433/188337760-b9f28532-6251-436c-a269-7836c725bbf2.png)

## Descrição dos Casos de Uso

### CDU 01

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

### CDU 02

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

### CDU 03

**Atores:** Paciente.

**Fluxo Principal**

1. Usuário insere as informações solicitadas: CPF e senha.
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

### CDU 04

**Atores:** Médico.

**Fluxo Principal**

1. Médico insere as informações solicitadas: CRM e senha.
2. Sistema analisa as informações.
3. Sistema libera acesso.

**Fluxo Alternativo A**

1. Médico insere as informações solicitadas: CRM e senha.
2. Sistema analisa as informações.
3. A seguinte informação não está cadastrada: CRM.
4. Sistema exibe mensagem informando o problema.
5. Sistema nega acesso.

**Fluxo Alternativo B**

1. Médico insere as informações solicitadas: CRM e senha.
2. Sistema analisa as informações.
3. A senha informada está incorreta.
4. Sistema exibe mensagem informando o problema.
5. Médico repete o processo de login.

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
5. Paciente é direcionada para a página de cadastro/login.

### CDU 06

**Atores:** Paciente e Médico.

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

### CDU 07

**Atores:** Paciente e Médico.

**Fluxo Principal**

1. Usuário clica em "perfil".
2. Usuário clica em "calendário".
3. Usuário tem acesso as informações relacionadas aos agendamentos.

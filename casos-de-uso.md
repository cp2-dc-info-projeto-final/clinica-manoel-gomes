# Documento de Casos de Uso

## Lista dos Casos de Uso

 - [CDU 01](#CDU-01): Cadastro de Pacientes.
 - [CDU 02](#CDU-02): Cadastro de Médicos.
 - [CDU 03](#CDU-03): Login de Pacientes.
 - [CDU 04](#CDU-04): Login de Médicos.
 - [CDU 05](#CDU-05): Agendamento de Consultas.
 - [CDU 06](#CDU-06): Vizualização de Perfil.
 - [CDU 07](#CDU-07): Vizualização de Calendário/Grade Horária.


## Lista dos Atores

 - Administrador
 - Médico
 - Paciente

## Diagrama de Casos de Uso

![Diagrama de Casos de Uso](diagrama-exemplo.png)

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

Duis nec orci quis velit faucibus hendrerit tempus vel libero.

**Fluxo Principal**

1. Praesent interdum lectus sit amet augue tincidunt imperdiet.
2. Duis ac dolor vel nisi imperdiet vehicula et non sem.
3. Nunc imperdiet tortor consequat, lobortis purus non, interdum risus.

**Fluxo Alternativo A**

1. Aliquam efficitur arcu ac fermentum egestas.
2. Pellentesque ac diam vitae erat bibendum hendrerit.
3. Mauris sed purus sit amet lectus efficitur placerat et eu diam.
4. Aenean ullamcorper tellus quis nibh porttitor congue.
5. Phasellus laoreet erat eget condimentum dictum.

### CDU 06

Duis nec orci quis velit faucibus hendrerit tempus vel libero.

**Fluxo Principal**

1. Praesent interdum lectus sit amet augue tincidunt imperdiet.
2. Duis ac dolor vel nisi imperdiet vehicula et non sem.
3. Nunc imperdiet tortor consequat, lobortis purus non, interdum risus.

**Fluxo Alternativo A**

1. Aliquam efficitur arcu ac fermentum egestas.
2. Pellentesque ac diam vitae erat bibendum hendrerit.
3. Mauris sed purus sit amet lectus efficitur placerat et eu diam.
4. Aenean ullamcorper tellus quis nibh porttitor congue.
5. Phasellus laoreet erat eget condimentum dictum.

### CDU 07

Duis nec orci quis velit faucibus hendrerit tempus vel libero.

**Fluxo Principal**

1. Praesent interdum lectus sit amet augue tincidunt imperdiet.
2. Duis ac dolor vel nisi imperdiet vehicula et non sem.
3. Nunc imperdiet tortor consequat, lobortis purus non, interdum risus.

**Fluxo Alternativo A**

1. Aliquam efficitur arcu ac fermentum egestas.
2. Pellentesque ac diam vitae erat bibendum hendrerit.
3. Mauris sed purus sit amet lectus efficitur placerat et eu diam.
4. Aenean ullamcorper tellus quis nibh porttitor congue.
5. Phasellus laoreet erat eget condimentum dictum.



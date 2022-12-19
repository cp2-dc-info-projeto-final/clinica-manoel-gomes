# Documento de Casos de Uso

## Lista dos Casos de Uso

 - [CDU 01](#CDU-01): Cadastro de Administradores.
 - [CDU 02](#CDU-02): Cadastro de Pacientes.
 - [CDU 03](#CDU-03): Cadastro de Médicos.
 - [CDU 04](#CDU-04): Login de Usuários.
 - [CDU 05](#CDU-05): Cadastro de Especialidade.
 - [CDU 06](#CDU-06): Cadastro de Serviços.
 - [CDU 07](#CDU-07): Disponibilização de Datas e Horários.
 - [CDU 08](#CDU-08): Agendamento de Serviços.
 - [CDU 09](#CDU-09): Cancelamento de Serviços.
 - [CDU 010](#CDU-010): Excluir Agendamento.
 - [CDU 011](#CDU-011): Recuperar senha.
 - [CDU 012](#CDU-012): Visualizar Perfil.
 - [CDU 013](#CDU-013): Logout.

## Lista dos Atores

 - Administrador
 - Médico
 - Paciente

## Diagrama de Casos de Uso

<img src= "https://user-images.githubusercontent.com/89115632/208494955-b2e8b103-3ac9-4c20-90d4-7ba1ef53faff.png" width = 350px>

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
8. Sistema exibe mensagem: "Cadastro Realizado".
9. O acesso à "Área do Administrador / Perfil" é concedido ao Novo Administrador.

![image](https://user-images.githubusercontent.com/89115632/192409886-7ec0da01-ea2d-4ba3-bf40-51694c0475ab.png)

**Fluxo Alternativo A**

1. Administrador clica em "Cadastrar Novo Administrador" na área de perfil.
2. Administrador é encaminhado para a página de cadastro de administrador.
3. Administrador preenche os campos com os dados necessários.
4. Administrador clica em "Realizar cadastro".
5. Sistema analisa as informações.
6. As informações inseridas já estão cadastradas.
7. Sistema nega cadastro.
8. Sistema exibe mensagem: "Administrador já cadastrado".

![image](https://user-images.githubusercontent.com/89115632/194372955-67d20442-b186-449e-88fe-59f81edd1b27.png)

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
7. Sistema exibe mensagem: "Cadastro Realizado".

![image](https://user-images.githubusercontent.com/89115632/192409978-1cc3658a-4c57-4a91-aea3-bb303500c765.png)

**Fluxo Alternativo A**

1. Paciente clica em "Cadastre-se" na página inicial.
2. Paciente é encaminhado para a página de cadastro de pacientes.
3. Paciente insere as informações solicitadas: nome completo, CPF, data de nascimento, telefone, email e senha.
4. Paciente finaliza cadastro.
5. Sistema analisa as informações.
6. As seguintes informações já estão cadastradas: CPF, telefone ou email.
7. Sistema exibe mensagem informando o problema: "As informações inseridas já estão cadastradas".
8. Paciente repete o processo de cadastro.

![image](https://user-images.githubusercontent.com/89115632/194373502-13a3cbb9-bd3c-458d-bab3-7a95c67b1c8f.png)

### CDU 03

*Cadastro de Médicos.*

**Atores:** Administrador.

**Fluxo Principal**

1. Administrador clica em "Cadastrar Médico" na área de perfil.
2. Administrador é encaminhado para a página de cadastro de médicos.
3. Administrador insere as informações solicitadas: nome completo, CRM, especialidade, telefone, email e senha.
4. Administrador finaliza cadastro.
5. Sistema analisa as informações.
6. Sistema exibe mensagem: "Cadastro Realizado".
7. Sistema registra as informações no banco de dados.

![image](https://user-images.githubusercontent.com/89115632/194375037-aad9d65e-7128-4e7a-93a3-2836ac4b5d9b.png)

**Fluxo Alternativo A**

1. Administrador clica em "Cadastrar Médico" na área de perfil.
2. Administrador é encaminhado para a página de cadastro de médicos.
3. Administrador insere as informações solicitadas: nome completo, CRM, especialidade, telefone, email e senha.
4. Administrador finaliza cadastro.
5. Sistema analisa as informações.
6. As seguintes informações já estão cadastradas: CRM, telefone ou email.
7. Sistema exibe mensagem informando o problema: "As informações inseridas já estão cadastradas".
8. Administrador repete o processo de cadastro.

![image](https://user-images.githubusercontent.com/89115632/194374838-7b602950-bb12-465c-8111-d140f9314a7c.png)

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

![image](https://user-images.githubusercontent.com/89115632/194376317-27a92c58-a1d8-4985-9859-86094fdaf697.png)

**Fluxo Alternativo A**

1. Paciente clica em "Login" na página inicial.
2. Paciente é encaminhado para a página de login.
3. Paciente insere as informações solicitadas.
4. Sistema analisa as informações.
5. A seguinte informação não está cadastrada: CPF.
6. Sistema exibe mensagem informando o problema: "Usuário Não Cadastrado".
7. Paciente é encaminhado para a página de cadastro.

![image](https://user-images.githubusercontent.com/89115632/194377238-e0c5c876-4c75-448a-9266-e1f7abfaabca.png)

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

![image](https://user-images.githubusercontent.com/89115632/194377542-548d9f64-e7c3-499b-a9c3-d2799ab36939.png)

![image](https://user-images.githubusercontent.com/89115632/194377669-8e34d77a-d5cd-4405-ba2d-59b92a868ea7.png)

**Fluxo Alternativo C**

1. Usuário clica em "Login" na página inicial.
2. Usuário é encaminhado para a página de login.
3. Usuário insere as informações solicitadas.
4. Sistema analisa as informações.
5. A senha informada está incorreta.
6. Sistema exibe mensagem informando o problema: "Senha Inválida".
7. Usuário repete o processo de login.

![image](https://user-images.githubusercontent.com/89115632/194378066-e017ee37-16da-4a13-94f7-09245613531f.png)

### CDU 05

*Cadastro de Especialidade.*

**Atores: Administrador.**

**Fluxo Principal**

1. Administrador clica em "Cadastrar Especialidades" na área de perfil.
2. Administrador é encaminhado para a página de cadastro de especialidades.
3. Administrador insere especialidades disponíveis.
4. Administrador envia informações.
5. Sistema analisa as informações.
6. Sistema registra as informações no banco de dados.
7. Sistema exibe mensagem: "Especialidade adicionada ao banco de dados".
8. Lista de especialidades é atualizada.

![image](https://user-images.githubusercontent.com/89115632/194379199-e1ac881a-d530-430c-81fb-fba5bc761b7e.png)

**Fluxo Alternativo A**

1. Administrador clica em "Cadastrar Especialidades" na área de perfil.
2. Administrador é encaminhado para a página de cadastro de especialidades.
3. Administrador insere especialidades disponíveis.
4. Administrador envia informações.
5. Sistema analisa as informações.
6. A especialidade inserida já está cadastrada.
7. Sistema não permite a operação.
8. Sistema exibe mensagem informando o problema: "Especialidade já está cadastrada".

![image](https://user-images.githubusercontent.com/89115632/194379380-384f6bf6-8925-4929-97a2-5a1f1f93218a.png)

### CDU 06

*Cadastro de Serviços*

**Atores: Administrador.**

**Fluxo Principal**

1. Administrador insere nome, tipo de serviço e descrição.
2. Sistema analisa as informações.
3. Sistema valia informações.
4. Sistema consulta o banco de dados
5. Lista de serviços atualizada
6. Exibe a mensagem "Serviço cadastrado"

![image](https://user-images.githubusercontent.com/89115632/195245161-f623d7ba-e127-47f7-8455-4f3b92d51851.png)

**Fluxo Alternativo A**

1. Administrador insere nome, tipo de serviço e descrição.
2. Sistema analisa as informações.
3. Sistema valia informações.
4. Sistema consulta o banco de dados
5. Serviço já cadastrada
6. Exibe a mensagem "Serviço já cadastrado"

![image](https://user-images.githubusercontent.com/89115632/195245373-3df0e948-3c88-43cc-a719-8403c3a620d5.png)

### CDU 07

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
9. Sistema exibe mensagem: "Os dados inseridos (Horário/Data) foram adicionados ao banco de dados".
10. Calendário de agendamentos é atualizado.

![image](https://user-images.githubusercontent.com/89115632/194381548-6577d63c-f5a9-46d8-95ed-af3553c5f533.png)

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
10. Sistema exibe mensagem informando o problema: "Este horário já está cadastrado ou já possui um agendamento".

![image](https://user-images.githubusercontent.com/89115632/194381830-c3fb7b51-8525-4a79-bd34-41765d5b0b1c.png)

### CDU 08

*Agendamento de Serviços.*

**Atores:** Paciente.

**Fluxo Principal**

1. Paciente clica em "Agendamento" na página inicial.
2. Paciente é encaminhado para a página de agendamento.
3. Paciente escolhe serviço e horário.
4. Paciente finaliza agendamento.
5. Sistema analisa as informações.
6. Sistema registra dados.
7. Sistema exibe mensagem: "Agendamento Concluído".
8. O horário selecionado não ficará disponível para outros agendamentos.

![image](https://user-images.githubusercontent.com/89115632/194382468-7c2eba77-c2b0-4df6-9345-342da2993d55.png)

**Fluxo Alternativo A**

1. Paciente clica em "Agendamento" na página inicial.
2. Paciente é encaminhado para a página de agendamento.
3. Paciente escolhe especialidade, data e horário disponível.
4. Paciente finaliza agendamento.
5. Sistema analisa as informações.
6. Paciente não possui cadastro ou não está logado.
7. Sistema exibe mensagem informando o problema: "Faça Login/Cadastre-se".
8. Paciente é direcionado para a página de cadastro/login.

![image](https://user-images.githubusercontent.com/89115632/194385000-48144de7-982a-4739-9da7-2f9968acaede.png)

### CDU 09

*Cancelamento de Agendamento.*

**Atores:** Paciente e Administrador.

**Fluxo Principal**

1. Usuária clica no ícone de cancelamento na área de perfil.
2. Sistema analisa a informação.
3. O cancelamento é concluído e as informações ficam disponíveis para agendamento novamente.

![image](https://user-images.githubusercontent.com/89115632/208507757-ce7893c5-e8e7-4fe5-8c00-bcd48552f14f.png)

### CDU 010

*Excluir Agendamento.*

**Atores:** Administrador.

**Fluxo Principal**

1. Administrador clica no ícone de deletar na área de perfil.
2. Sistema analisa a informação.
3. Sistema apaga todos os dados do agendamento selecionado.

![image](https://user-images.githubusercontent.com/89115632/208508075-5bbe1498-f3ce-403f-b154-17050a586eeb.png)


### CDU 011

*Recuperar Senha.*

**Atores:** Paciente.

**Fluxo Principal**

1. Paciente clica em "Esqueceu a senha?" no formulário de login.
2. Paciente é encaminhado para a página de confirmação do CPF.
3. Paciente insere CPF.
4. Sistema analisa a informação.
5. Sistema envia código para o email do paciente.
6. Paciente é encaminhado para a página de confirmação do código.
7. Paciente insere o código de verificação.
8. Sistema analisa a informação.
9. Paciente é encaminhado para a página de recuperação de senha.
10. Paciente insere nova senha.
11. Sistema registra a nova senha.

![image](https://user-images.githubusercontent.com/89115632/208510573-5fd47ee1-f579-4ae7-b14c-5abbf07556d0.png)


**Fluxo Alternativo A**

1. Paciente clica em "Esqueceu a senha?" no formulário de login.
2. Paciente é encaminhado para a página de confirmação do CPF.
3. Paciente insere CPF.
4. Sistema analisa a informação.
5. CPF não cadastrado.
6. Sistema exibe mensagem: "CPF inválido!".
7. Paciente é encaminhado para a página de confirmação do CPF.

![image](https://user-images.githubusercontent.com/89115632/208511375-c80482a5-5e31-497d-891e-4d08bc6fe236.png)


**Fluxo Alternativo B**

1. Paciente clica em "Esqueceu a senha?" no formulário de login.
2. Paciente é encaminhado para a página de confirmação do CPF.
3. Paciente insere CPF.
4. Sistema analisa a informação.
5. Sistema envia código para o email do paciente.
6. Paciente é encaminhado para a página de confirmação do código.
7. Paciente insere o código de verificação.
8. Sistema analisa a informação.
9. Código de verificação inválido.
10. Sistema exibe mensagem: "Código inválido!".
11. Paciente é encaminhado para a página de confirmação do código.

![image](https://user-images.githubusercontent.com/89115632/208512777-dc1ac17b-917a-4226-899a-1b3311d26676.png)


### CDU 012

*Vizualização de Perfil.*

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
- Cadastro de Administradores.
- Cadastro de Datas e Horários.
- Cadastro de Serviços.
- Cadastro de Especialidades.

![image](https://user-images.githubusercontent.com/89115632/194385568-7350ecbb-0b59-42fc-ad07-58255b127dbe.png)

### CDU 013

*Logout*

**Atores:** Administrador, Funcionário e Paciente.

**Fluxo Principal**

1. Usuário clica em "Sair" na área de perfil.
2. Sistema encerra sessão.
3. Sistema redireciona o usuário para a página inicial.

![image](https://user-images.githubusercontent.com/89115632/195244321-717fbbf9-e165-4094-b654-ea59d889aacb.png)

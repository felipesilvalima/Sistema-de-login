
<!DOCTYPE html>
<html lang="pt-br">
<style>
:root {
    --login-primary-color: #611CED;
}

body {
    margin: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background-color: var(--login-primary-color);
    font-family: "Roboto", sans-serif;
}

.form {
    width: 80%;
    max-width: 32rem;
    /* background-color: white; */
    /* outline: 10px solid rgba(0,0,0, 0.5); */
    background-image: linear-gradient(to right,
            rgba(0, 0, 0, 0.3) 0.5rem,
            white 0.5rem);
}

.form__fieldset {
    border: none;
    display: flex;
    flex-direction: column;
    gap: 0.25em;
    padding: 2rem;
}

.form__title {
    font-weight: 300;
    font-size: 2rem;
    color: var(--login-primary-color);
    padding-top: 2rem;
}

.form__label {
    font-size: 0.8rem;
    text-transform: uppercase;
    font-weight: 300;
}

.form__input {
    padding: 0.5em 0;
    font-size: 1.2rem;
    border-radius: 0;
    border: none;
    border-bottom: 1px solid var(--login-primary-color);
    margin-bottom: 0.8rem;
    outline: none;
    transition: padding-left 0.08s ease;
}

.form__input:focus {
    outline: 2px solid var(--login-primary-color);
    padding-left: 0.3rem;
}

.btn {
    text-transform: uppercase;
    font-size: 1rem;
    border-radius: 3px;
    border: none;
    outline: none;
    padding: 0.8rem 1.2rem;
    text-decoration: none;
    font-weight: 600;
    letter-spacing: 1px;
}

.btn-primary {
    background-color:#3a68b7;
    color: white;
}

.btn-secondary {
    color: #3a68b7;
}

.form__action {
    display: flex;
    align-items: center;
    flex-wrap: wrap;
}

.form__action__aside {
    font-size: 0.85rem;
    flex-grow: 1;
    text-align: right;
    text-decoration: none;
    color: #999;
}

.form__action__link {
    text-decoration: inherit;
    color: inherit;
}


</style>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Página de login" />
    <meta name="keywords" content="pagina, login, usuario, senha" />
    <meta name="author" content="Wesley Victor Pereira Silva" />
    <title>Formulário de login</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="style.css" />
</head>

<body>

    <form action="{{route('auth.login')}}" method="post" autocomplete="off" class="form">
    
        @csrf
        <fieldset class="form__fieldset">
            <legend class="form__title">Login</legend>
            @include('mensagem')
            <label for="user" class="form__label">E-mail</label>
            <input  name="email" class="form__input" />
            <label for="password" class="form__label">Senha</label>
            <input type="password"  name="password"  class="form__input" />
            <div class="form__action">
                <input type="submit" value="Login" class="btn btn-primary" />
                <a href="{{route('login.create')}}" class="btn btn-secondary">Cadastre-se</a>
                <a href="{{route('enviar.Email')}}" >Esqueci a minha senha</a>
            </div>
        </fieldset>
    </form>
</body>
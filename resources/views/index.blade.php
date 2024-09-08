
<h1>olá {{auth()->user()->name}}</h1>

<p ><a href="{{route('login.logout')}}" onclick="return confirm('Tem certeza que deseja Sair da sua conta {{auth()->user()->name}} ',)">Sair</a></p>

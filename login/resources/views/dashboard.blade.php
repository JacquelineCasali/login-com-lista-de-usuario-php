<x-app-layout>
     
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Lista de Usuário') }}
        </h2>
    </x-slot>

    <div class="py-12">
 <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
  <div class="p-6 bg-white border-b border-gray-200">
    
    <link rel="stylesheet" href="{{asset('/css/123.css')}}"/>
  <main id="user-list">
       <div class="table-container">
        <table >
          <thead>
              <tr>
     <th>Id</th>
                <th>Nome</th>
                <th>Email</th>
                <TH>Password:</TH>
                            
                   <th>Ação</th>        
              </tr>
          </thead>
          <tbody>
  <!-- variavel no plural no for of vem para o singular -->
      
              <!--conteudo daqui roda a quantidade de vezes da variavel  -->
        <!-- trabalhando com for  nao pode ter id  -->
              <tr>
           
                  {{-- <td>{{$user->id}}</td> --}}
                  <td><%= user.nome %></td>
                  <td><%= user.email %></td>
                  
                  <td><%= user.Password %></td>
                
                  <td class="table-actions">
    {{-- <a href='/dashboard/cadastro/{{$user->id}}' class="table-link-show"> Visualizar</a> --}}

     <a href='/dashboard/cadastro/{$id}' class="table-link-show"> Visualizar</a> 
                      
                      <a href="/MinhaConta/enderecos/editarendereco/<%= user.id%>" class="table-link-edit" >Editar</a>
                      <a href="/MinhaConta/enderecos/deletarenderecos/<%= user.id%>" class="table-link-delete" >Excluir</a>
                  </td>
              </tr>
              {{-- <%}%> --}}
          </tbody>
      </table>
  </div>
  {{-- <%}else{ %>
      <h2 class="error-alert">Nenhum usuário encontrado </h2>
  <%} %> --}}



  </main>

{{-- 

  <link rel="stylesheet" href="/stylesheets/123.css">
  <main id="user-list">
      <h1>Lista de Cartões</h1>

     <!-- verificação  -->
     <% if (users.length>0) {%>
  
      <div class="table-container">
        <table >
          <thead>
              <tr>
    
                <th>Nome</th>
                <th>CPF</th>
                <TH>Numero do Cartão:</TH>
                <TH>CVC:</TH>
                   <th>Ação</th>        
              </tr>
          </thead>
          <tbody>
  <!-- variavel no plural no for of vem para o singular -->
      <% for (let user of users){%>
              <!--conteudo daqui roda a quantidade de vezes da variavel  -->
        <!-- trabalhando com for  nao pode ter id  -->
              <tr>
           
                  <td><%= user.nome %> </td>
                  <td><%= user.cpf %></td>
                  <td><%= user.cartao %></td>
                  <td><%= user.cvc %></td>
                 
                  <td class="table-actions">
                      <a href="/MinhaConta/cartoes/<%= user.id%>" class="table-link-show"> Visualizar</a>
                      <a href="/MinhaConta/cartoes/adicionarcartoes" class="table-link-show"> adicionarcartoes</a>
                      
                      <a href="/MinhaConta/cartoes/editarcartoes/<%= user.id%>" class="table-link-edit" >Editar</a>
                      <a href="/MinhaConta/cartoes/deletarcartao/<%= user.id%>" class="table-link-delete" >Excluir</a>
                  </td>
              </tr>
              <%}%>
          </tbody>
      </table>
  </div>
  <%}else{ %>
      <h2 class="error-alert">Nenhum usuário encontrado </h2>
  <%} %> --}}



  {{-- </main> --}}




                </div>
            </div>
        </div>
    </div>
</x-app-layout>

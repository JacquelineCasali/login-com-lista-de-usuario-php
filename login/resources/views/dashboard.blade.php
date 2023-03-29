<x-app-layout>


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
                          <th>Ação</th>        
              </tr>
          </thead>

          <tbody>

        @foreach ($user as $user)
        <tr>
     <td>{{$user->id}}</td>
     <td>{{$user->name}}</td>
     <td>{{$user->email}}</td>
    <td class="table-actions"> 
     <a href='/dashboard/cadastro/{{$user->id}}' class="table-link-show"> Visualizar</a>
                    
                      <a href="/dashboard/editar/{{$user->id}}" class="table-link-edit" >Editar</a>
                      <a href="/dashboard/excluir/{{$user->id}}" class="table-link-delete" >Excluir</a>

  @endforeach
      </tr>
   </tbody>
      </table>     
                  

   </main>




</div>
</div>
</div>
</div>



</x-app-layout> 

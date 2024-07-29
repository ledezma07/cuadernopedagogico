<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('AFILIACION DE ESTUDIANTES') }}
        </h2>
    </x-slot>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://unpkg.com/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
        <title>Document</title>
        <script src="https://cdn.tailwindcss.com"> </script>
    </head>
    <body>
    <div class="container mx-auto px-4 py-4 bg-blue-000">
        <section class="py-4">
            <div class="w-1/2 mx-4 ">
                <form action="{{ route('estudiante.create') }}">
                    <button class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                        REGISTRAR
                      </button>
                </form>               
            </div>
        </section>
        
        <section class="py4">
            <div class="flex flex-col overflow-x-auto">
                <div class="sm:-mx-6 lg:-mx-8">
                  <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                    <div class="overflow-x-auto">
                      <table
                        class="min-w-full text-start text-sm font-light text-surface dark:text-white">
                        <thead
                          class="border-b border-neutral-200 font-medium dark:border-white/10 bg-[#000000] text-white">
                          <tr>
                            <th scope="col" class="px-6 py-4">ID</th>
                            <th scope="col" class="px-6 py-4">CI</th>
                            <th scope="col" class="px-6 py-4">PATERNO</th>
                            <th scope="col" class="px-6 py-4">MATERNO</th>
                            <th scope="col" class="px-6 py-4">NOMBRES</th>
                            <th scope="col" class="px-6 py-4">RUDE</th>
                            <th scope="col" class="px-6 py-4">F.NACIMIENTO</th>
                            <th scope="col" class="px-6 py-4">EDAD</th>
                            <th scope="col" class="px-6 py-4">ESTADO</th>
                            <th scope="col" class="px-6 py-4">ACCIONES</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($estudiante as $estudiante) 
                          <tr class="border-b border-neutral-800 dark:border-white/10">
                            <td class="whitespace-nowrap px-6 py-4 font-medium">{{$estudiante->id}}</td>
                            <td class="whitespace-nowrap px-6 py-4">{{$estudiante->ci}}</td>
                            <td class="whitespace-nowrap px-6 py-4">{{$estudiante->paterno}}</td>
                            <td class="whitespace-nowrap px-6 py-4">{{$estudiante->materno}}</td>
                            <td class="whitespace-nowrap px-6 py-4">{{$estudiante->nombres}}</td>
                            <td class="whitespace-nowrap px-6 py-4">{{$estudiante->rude}}</td>
                            <td class="whitespace-nowrap px-6 py-4">{{$estudiante->f_nac}}</td>
                            <td class="whitespace-nowrap px-6 py-4">{{$estudiante->edad}}</td>
                            <td class="whitespace-nowrap px-6 py-4">{{$estudiante->est_inscripcion}}</td>
                            <td class="whitespace-nowrap px-6 py-4">
                                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 border border-blue-500 rounded"><a href="#">Editar</a></button>
                                <input type="submit" class="bg-red-500 hover:bg-blue-700 text-white font-bold py-1 px-2 border border-red-500 rounded" value="borrar" onclick="#"/>
                                <a href="#"> <button type="button" class="bg-yellow-500 hover:bg-bluyellow-700 text-white font-bold py-1 px-2 border border-bluyellow-500 rounded">Desactivar</button></a>
                            </td>
                          </tr> 
                          @endforeach                                                  
                         
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div> 
        </section>

        <section class="py-4">
            <div class="w-1/2 my-4  bg-slate-200">
            <p class="py-4 px-2">
                    Carga la hola excel para registrar la filiacion de estudiantes
            </p>  
                <form action="{{ route('estudiante.create') }}">
                    <input type="file">
                    <button class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                        CARGAR HOJA EXCEL
                    </button>
                      
                </form>
           
            </div>
        </section>
    </div>

   
     
        

    </body>
    </html>
</x-app-layout>

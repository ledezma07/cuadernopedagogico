<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('CREAR NUEVO ESTUDIANTE') }}
        </h2>
    </x-slot>
    
    <section class="py-4 bg-blue-950 flex justify-around">
        <div class="w-1/2 mx-4">
            <h2 class="text-center font-bold text-2x1 text-white">
                FORMMULARIO DE AFILIACION ESTUDIANTIL
            </h2>
            <p class="text-center font-bold text-2x1 text-white">
                Por favor verifique la informacion del estudiante.
            </p>
        <div class="bg-white rounded-xl shadow-lg p-8 mt-10">

            <form action="{{ route('estudiante.store') }}" method="POST" enctype="multipart/form-data" class="flex flex-col space-y-4">
                @csrf
                <div><label for="" class="text-sm font-bold ">CI:</label></div>
                <div>
                    <input type="text" name = "ci" placeholder="Ingresa tu CI" class="ring-1 ring-gray-300 w-full rounded-md autline-name focus:ring-2 focus:ring-blue-300 px-4 py-2">
                </div>
                <div><label for="" class="text-sm font-bold ">EXPEDITO:</label></div>
                <div>
                    <input type="text" name = "exp" placeholder="Expedito en" class="ring-1 ring-gray-300 w-full rounded-md autline-name focus:ring-2 focus:ring-blue-300 px-4 py-2">
                </div>
                <div>                    
                    <label for="" class="text-sm font-bold ">PATERNO:</label></div>
                <div>
                    <input type="text" name = "paterno" placeholder="APELLIDO PATERNO" class="ring-1 ring-gray-300 w-full rounded-md autline-name focus:ring-2 focus:ring-blue-300 px-4 py-2">
                </div>      
                <div> <label for="" class="text-sm font-bold ">MATERNO:</label></div>
                <div>
                <input type="text" name = "materno" placeholder="APELLIDO MATERNO" class="ring-1 ring-gray-300 w-full rounded-md autline-name focus:ring-2 focus:ring-blue-300 px-4 py-2">
                </div>
                <div><label for=""  class="text-sm font-bold ">NOMBRES:</label></div>
                <div>                    
                    <input type="text" name = "nombres" placeholder="NOMBRES" class="ring-1 ring-gray-300 w-full rounded-md autline-name focus:ring-2 focus:ring-blue-300 px-4 py-2">
                </div>    
                
                <div><label for=""  class="text-sm font-bold ">RUDE:</label></div>
                <div>                    
                    <input type="text" name = "rude" placeholder="RUDE" class="ring-1 ring-gray-300 w-full rounded-md autline-name focus:ring-2 focus:ring-blue-300 px-4 py-2">
                </div>                
                <div><label for="" class="text-sm font-bold ">F. NACIMIENTO:</label></div>
                <div>                    
                    <input type="date" name = "f_nac" class="ring-1 ring-gray-300 w-full rounded-md autline-name focus:ring-2 focus:ring-blue-300 px-4 py-2">
                </div>               

                <button class="inline-block self-end bg-indigo-500 text-white font-bold px-6 py-4 rounded-lg text-sm uppercase">
                Enviar
                </button>
            </form>
        </div>
        </div>
</section>   



</x-app-layout>

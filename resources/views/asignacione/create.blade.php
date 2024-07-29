<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('ASIGNACION DE MATERIAS Y DE PARALELOS DOCENTE') }}
        </h2>
    </x-slot>
    
    <section class="py-4 bg-blue-950 flex justify-around">
        <div class="w-1/2 mx-4">
            <h2 class="text-center font-bold text-2x1 text-white">
                FORMMULARIO DE ASIGNACION DE MATERIAS
            </h2>
            <p class="text-center font-bold text-2x1 text-white">
                Por favor verifique la informacion antes de su envio.
            </p>
        <div class="bg-white rounded-xl shadow-lg p-8 mt-10">

            <form action="{{ route('asignacione.store') }}" method="POST" enctype="multipart/form-data" class="flex flex-col space-y-4">
                @csrf
                <div><label for="" class="text-sm font-bold ">F. NACIMIENTO:</label></div>
                <div>                    
                    <input type="date" name = "fecha" class="ring-1 ring-gray-300 w-full rounded-md autline-name focus:ring-2 focus:ring-blue-300 px-4 py-2">
                </div>               
                <hr>
                <select name="periodo_id"
                        class="w-full p-3 mt-2 mb-4 w-full bg-slate-200 rounded border-2 border-slate-200 focus:border-slate-600 focus:outline-none">
                        
                        <option value="">Seleccione una PERIODO</option>
                        @foreach ($periodo as $periodo)
                            <option value="{{$periodo->id }}">{{ $periodo->descripcion}}</option>
                        @endforeach
                </select>
                <hr>
                <select name="docente_id"
                        class="w-full p-3 mt-2 mb-4 w-full bg-slate-200 rounded border-2 border-slate-200 focus:border-slate-600 focus:outline-none">
                        
                        <option value="">Seleccione una DOCENTE</option>
                        @foreach ($docente as $docente)
                            <option value="{{$docente->id }}">{{ $docente->nombres}}</option>
                        @endforeach

                </select>
                <hr>
                <select name="curso_id"
                        class="w-full p-3 mt-2 mb-4 w-full bg-slate-200 rounded border-2 border-slate-200 focus:border-slate-600 focus:outline-none">
                        
                        <option value="0">Seleccione una CURSO</option>
                        <option value="1">MATEMATICA A</option>
                        <option value="2">MATEMATICA B</option>
                        <option value="3">FISICA A</option>
                        <option value="4">FISICA B</option>
                        <option value="5">QUIMICA A</option>
                        <option value="6">QUIMICA B</option>
                        

                </select>




                
                
                <button class="inline-block self-end bg-indigo-500 text-white font-bold px-6 py-4 rounded-lg text-sm uppercase">
                Enviar
                </button>
            </form>
        </div>
        </div>
</section>   



</x-app-layout>

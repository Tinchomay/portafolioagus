@extends('layouts.app')

@section('titulo')
Proyectos
@endsection


@section('contenido')
<div class="flex items-center mt-10">
    <div class="w-4/5 md:w-8/12 mx-auto">
        <h2 class="text-white text-xl mb-4 font-bold text-center"><span class=" text-green-300 text-base font-normal">03.</span> Proyectos</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 pb-6">
            @forelse ($proyectos as $proyecto)
                <div class="flex flex-col bg-sky-900 px-4 py-6 rounded-md hover:scale-105 duration-200 justify-between hover:shadow-lg hover:shadow-gray-900 " data-aos="zoom-in" data-aos-once="true">
                    <div>
                        <div class="flex justify-between">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 text-white">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12.75V12A2.25 2.25 0 0 1 4.5 9.75h15A2.25 2.25 0 0 1 21.75 12v.75m-8.69-6.44-2.12-2.12a1.5 1.5 0 0 0-1.061-.44H4.5A2.25 2.25 0 0 0 2.25 6v12a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 18V9a2.25 2.25 0 0 0-2.25-2.25h-5.379a1.5 1.5 0 0 1-1.06-.44Z" />
                            </svg>
                            <div class="flex gap-2">
                                @if ($proyecto->github)
                                    <a href="{{ $proyecto->github }}" rel="noopener noreferrer" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" class="size-6" viewBox="0,0,256,256">
                                        <g fill="#ffffff" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g transform="scale(8.53333,8.53333)"><path d="M15,3c-6.627,0 -12,5.373 -12,12c0,5.623 3.872,10.328 9.092,11.63c-0.056,-0.162 -0.092,-0.35 -0.092,-0.583v-2.051c-0.487,0 -1.303,0 -1.508,0c-0.821,0 -1.551,-0.353 -1.905,-1.009c-0.393,-0.729 -0.461,-1.844 -1.435,-2.526c-0.289,-0.227 -0.069,-0.486 0.264,-0.451c0.615,0.174 1.125,0.596 1.605,1.222c0.478,0.627 0.703,0.769 1.596,0.769c0.433,0 1.081,-0.025 1.691,-0.121c0.328,-0.833 0.895,-1.6 1.588,-1.962c-3.996,-0.411 -5.903,-2.399 -5.903,-5.098c0,-1.162 0.495,-2.286 1.336,-3.233c-0.276,-0.94 -0.623,-2.857 0.106,-3.587c1.798,0 2.885,1.166 3.146,1.481c0.896,-0.307 1.88,-0.481 2.914,-0.481c1.036,0 2.024,0.174 2.922,0.483c0.258,-0.313 1.346,-1.483 3.148,-1.483c0.732,0.731 0.381,2.656 0.102,3.594c0.836,0.945 1.328,2.066 1.328,3.226c0,2.697 -1.904,4.684 -5.894,5.097c1.098,0.573 1.899,2.183 1.899,3.396v2.734c0,0.104 -0.023,0.179 -0.035,0.268c4.676,-1.639 8.035,-6.079 8.035,-11.315c0,-6.627 -5.373,-12 -12,-12z"></path></g></g>
                                        </svg></a>
                                @endif
                                @if ($proyecto->enlace)
                                    <a href="{{ $proyecto->enlace }}" rel="noopener noreferrer" target="_blank">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 text-white">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 6H5.25A2.25 2.25 0 0 0 3 8.25v10.5A2.25 2.25 0 0 0 5.25 21h10.5A2.25 2.25 0 0 0 18 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25" />
                                        </svg>
                                    </a>
                                @endif
                            </div>
                        </div>
                        <h3 class="mt-4 text-white font-extrabold">{{ $proyecto->titulo }}</h3>
                        <p class=" font-light text-white leading-5 text-sm">{{ $proyecto->descripcion }}</p>
                    </div>
                    <p class="text-xs text-white mt-4 font-light">{{ $proyecto->tecnologias }}</p>
                </div>
            @empty
                <p class="text-center text-white">No hay proyecotos aun</p>
            @endforelse
        </div>
    </div>
</div>
@endsection

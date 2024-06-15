@extends('layouts.app')

@section('titulo')
Agustin Sanchez
@endsection


@section('contenido')
<div class="md:h-[80vh] flex items-center">
    <div class=" w-4/5 md:w-1/2 mx-auto mt flex justify-start flex-col space-y-3 pt-12 md:pt-0">
        <h1 class="text-green-300 text-xs drop">Hola, mi nombre es</h1>
        <p class="text-white text-4xl font-bold">Agustín Sánchez May</p>
        <p class=" text-gray-500 text-4xl font-bold" data-aos="zoom-in">Desarrollador Backend Jr</p>
        <p class="w-5/6 text-white">Soy Ingeniero en Gestión de Tecnologías de la Información. Me he formado para brindar soluciones eficaces y seguras en el desarrollo del backend de las páginas webs, además cuento con los conocimientos para brindar soporte en el Frontend</p>
        <a href="{{ route('proyectos') }}" class="py-1 px-4 text-white border-2 border-green-300 hover:bg-green-300  hover:text-black self-start">Ver mis proyectos</a>
        <div class="flex items-center gap-2">
            <a href="https://github.com/Tinchomay" rel="noopener noreferrer" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" class="size-7 inline-block hover:scale-105" viewBox="0,0,256,256">
                <g fill="#ffffff" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g transform="scale(8.53333,8.53333)"><path d="M15,3c-6.627,0 -12,5.373 -12,12c0,5.623 3.872,10.328 9.092,11.63c-0.056,-0.162 -0.092,-0.35 -0.092,-0.583v-2.051c-0.487,0 -1.303,0 -1.508,0c-0.821,0 -1.551,-0.353 -1.905,-1.009c-0.393,-0.729 -0.461,-1.844 -1.435,-2.526c-0.289,-0.227 -0.069,-0.486 0.264,-0.451c0.615,0.174 1.125,0.596 1.605,1.222c0.478,0.627 0.703,0.769 1.596,0.769c0.433,0 1.081,-0.025 1.691,-0.121c0.328,-0.833 0.895,-1.6 1.588,-1.962c-3.996,-0.411 -5.903,-2.399 -5.903,-5.098c0,-1.162 0.495,-2.286 1.336,-3.233c-0.276,-0.94 -0.623,-2.857 0.106,-3.587c1.798,0 2.885,1.166 3.146,1.481c0.896,-0.307 1.88,-0.481 2.914,-0.481c1.036,0 2.024,0.174 2.922,0.483c0.258,-0.313 1.346,-1.483 3.148,-1.483c0.732,0.731 0.381,2.656 0.102,3.594c0.836,0.945 1.328,2.066 1.328,3.226c0,2.697 -1.904,4.684 -5.894,5.097c1.098,0.573 1.899,2.183 1.899,3.396v2.734c0,0.104 -0.023,0.179 -0.035,0.268c4.676,-1.639 8.035,-6.079 8.035,-11.315c0,-6.627 -5.373,-12 -12,-12z"></path></g></g>
                </svg>
            </a>
            <a href="https://www.linkedin.com/in/agustin-sanchez-may-405324211" rel="noopener noreferrer" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" class="size-6 text-white hover:scale-105" viewBox="0 0 15 15"><path fill="none" stroke="currentColor" d="M4.5 6v5m6 0V8.5a2 2 0 1 0-4 0V11V6M4 4.5h1M1.5.5h12a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1h-12a1 1 0 0 1-1-1v-12a1 1 0 0 1 1-1Z"/></svg>
            </a>
        </div>
    </div>
</div>
@endsection


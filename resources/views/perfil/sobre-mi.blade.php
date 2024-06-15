@extends('layouts.app')

@section('titulo')
Educacion y Experiencia
@endsection


@section('contenido')
<div class="lg:h-[80vh] flex items-center">
    <div class=" w-4/5  md:w-7/12 mx-auto">
        <h2 class="text-white text-xl mb-4 font-bold"><span class=" text-green-300 text-base font-normal">01.</span> Sobre Mi</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-y-4 md:gap-x-6 pb-6 md:pb-0">
            <div ">
                <picture class="flex justify-center">
                    <source srcset="{{ asset('img/asm.webp') }}" type="image/webp">
                    <img class=" w-44 md:w-4/5" src="{{ asset('img/asm.jpeg') }}" alt="Imagen de Agustin Sanchez">
                </picture>
            </div>
            <div class=" space-y-2 flex flex-col col-span-2 md:-order-1">
                <p class="text-sm text-white font-light">¡Hola! Mi nombre es Agustín Sánchez y me encanta el desarrollo web, especialmente el Backend. Mi interés por la informática y programación viene desde la infancia y hace un par de años pude obtener la solvencia económica para poder perseguir mi sueño.</p>
                <p class="text-sm text-white font-light">Del desarrollo web siempre me llamo la atención la parte de los servidores por lo que decidí aprender Laravel, un sólido y robusto Framework de PHP. Y también en un fututo cercano me gustaría aprender un Framework de JS.</p>
                <p class="text-sm text-white font-light">He desarrollado páginas web de tamaños pequeños, y me interesaría mucho aprender a trabajar con un gran equipo de trabajo además desarrollar más mis habilidades.</p>
                <p class="text-sm text-white font-light">Reciénteme profundicé el estudio de Laravel con un curso para utilizarlo como Framework Full Stack por lo que aprendí el uso de Livewire para diseños completos de páginas, además también el uso de este como API para ofrecer y consumir información con seguridad utilizando el Bearer Token que puede proporcionar Laravel.</p>
        
                <p class="text-sm text-white font-light">Aquí las tecnologías que conozco y con las que he trabajado.</p>
                <div class="flex gap-8 pl-4">
                    <ul class=" list-disc text-green-300 font-light style text-sm">
                        <li><span class=" text-white">HTML y CSS</span></li>
                        <li><span class=" text-white">SASS</span></li>
                        <li><span class=" text-white">TailwindCSS</span></li>
                        <li><span class=" text-white">React</span></li>
                        </ul>
                    <ul class="list-disc text-green-300 font-light text-sm">
                        <li><span class=" text-white">Laravel</span></li>
                        <li><span class=" text-white">PHP</span></li>
                        <li><span class=" text-white">MySQL</span></li>
                        <li><span class=" text-white">JavaScript</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

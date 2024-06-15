@extends('layouts.app')

@section('titulo')
Educacion y Experiencia
@endsection

@section('contenido')
<div class=" w-5/6 md:w-3/4 mx-auto mt-10">
    <h2 class="text-white text-xl mb-4 font-bold text-center"><span class=" text-green-300 text-base font-normal">02.</span> Experiencia</h2>
    <div class=" relative my-10 mx-auto timeline">
        <div class=" px-10 py-2 md:w-1/2 relative md:left-0">
            <div class=" bg-emerald-500 px-6 py-4 relative rounded-lg" data-aos="zoom-in" data-aos-once="true">
                <h2 class=" text-2xl font-bold">Freelancer</h2>
                <h3 class=" mb-4 text-sm">2023-2024</h3>
                <p>Desarrollando páginas webs para clientes pequeños con Laravel, Blade, Livewire y TailwindCSS aplicando sistemas de autenticación seguros como Breeze y utilizando como base de datos MySQL</p>
                <span class="flecha-derecha"></span>
            </div>
        </div>

        <div class=" px-10 py-2 md:w-1/2 relative md:left-1/2" data-aos="zoom-in" data-aos-once="true">
            <div class=" bg-emerald-500 px-6 py-4 relative rounded-lg">
                <h2 class=" text-2xl font-bold">Asesor para estudiantes</h2>
                <h3 class=" mb-4 text-sm">2023-2024</h3>
                <p>Apoyo remunerado a estudiantes de universidades que están cursando materias de programación y desarrollo web</p>
                <span class="flecha-izquierda"></span>
            </div>
        </div>

        <div class=" px-10 py-2 md:w-1/2 relative md:left-0" data-aos="zoom-in" data-aos-once="true">
            <div class=" bg-emerald-500 px-6 py-4 relative rounded-lg">
                <h2 class=" text-2xl font-bold">Supervisor de Almancen - Solistica</h2>
                <h3 class=" mb-4 text-sm">2022 - 2024</h3>
                <p>Supervisor de almacén de un Centro de Distribución</p>
                <span class="flecha-derecha"></span>
            </div>
        </div>
    </div>

    <h2 class="text-white text-xl mb-4 font-bold text-center"><span class=" text-green-300 text-base font-normal">02.</span> Educacion</h2>
    {{-- timeline --}}
    <div class=" relative my-10 mx-auto timeline">
        {{-- container --}}
        <div class=" px-10 py-2 md:w-1/2 relative md:left-0">
            {{-- text-box --}}
            <div class=" bg-emerald-500 px-6 py-4 relative rounded-lg" data-aos="zoom-in" data-aos-once="true">
                <h2 class=" text-2xl font-bold">Laravel - Udemy</h2>
                <h3 class=" mb-4 text-sm">2024</h3>
                <p class="mb-3">Curso de Laravel especializado utilizando MVC, el ORM, Livewire, autenticación y login de usuarios, Breeze, Laravel como API, Notificaciones, policy, middlewares, email, Route Model Binding</p>
                <a href="https://www.udemy.com/certificate/UC-df4a342b-a0b2-427a-b4eb-c4e6883de418/" target="_blank" class="py-1 px-4 text-black  bg-gray-200 font-bold shadow-xl rounded-md" rel="noopener noreferrer" >Ver Certificado</a>
                <span class="flecha-derecha"></span>
            </div>
        </div>

        {{-- container --}}
        <div class=" px-10 py-2 md:w-1/2 relative md:left-1/2">
            {{-- text-box --}}
            <div class=" bg-emerald-500 px-6 py-4 relative rounded-lg" data-aos="zoom-in" data-aos-once="true">
                <h2 class=" text-2xl font-bold">Dessarrollo Web Completo - Udemy</h2>
                <h3 class=" mb-4 text-sm">2023</h3>
                <p class="mb-3">Curso de desarrollo web completo, este incluía HTML, CSS, SASS, MySQL, PHP, JavaScript, se desarrollaron páginas webs FullStack utilizando MVC con miniFramework para realizar las consultas a la bd por medio de PDO y renderizar las vistas</p>
                <a href="https://www.udemy.com/certificate/UC-4bb9b0cf-bb5f-4be8-a8dc-c60d1ec565ee/" target="_blank" class="py-1 px-4 text-black  bg-gray-200 font-bold rounded-md shadow-xl" rel="noopener noreferrer" >Ver Certificado</a>
                <span class="flecha-izquierda"></span>
            </div>
        </div>

        {{-- container --}}
        <div class=" px-10 py-2 md:w-1/2 relative md:left-0">
            {{-- text-box --}}
            <div class=" bg-emerald-500 px-6 py-4 relative rounded-lg" data-aos="zoom-in" data-aos-once="true">
                <h2 class=" text-2xl font-bold">Ing. Gestión de Tecnologías de la Información</h2>
                <h3 class=" mb-4 text-sm">2019 - 2022</h3>
                <p>Ingeniero titulado y con cédula de la UVEG</p>
                <span class="flecha-derecha"></span>
            </div>
        </div>
    </div>
</div>
@endsection
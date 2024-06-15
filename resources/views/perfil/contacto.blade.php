@extends('layouts.app')

@section('titulo')
Contacto
@endsection

@section('contenido')
<div class="mt-6 w-full md:w-4/5 mx-auto">
    <div class="w-4/5 md:w-8/12 mx-auto">
        <h2 class="text-white text-xl mb-4 font-bold text-center"><span class=" text-green-300 text-base font-normal">04.</span> Contacto</h2>
    </div>
    <div class="flex flex-col lg:flex-row justify-between gap-8 lg:gap-14 mt-4">
        <div class="w-full px-8 md:px-0 lg:w-3/5 mb-8">
            <h3 class="text-white text-lg mb-4 font-bold">Enviame un email</h3>
            <div class="grid grid-cols-1 gap-x-16 gap-y-8 lg:grid-cols-3">
                <div class="rounded-lg bg-white p-6 shadow-lg lg:col-span-3 lg:p-8" >
                    <form class="space-y-4" id="form">
                        <div>
                            <label for="from_name">Nombre</label>
                            <input
                                class="w-full rounded-lg border-sky-950 border p-3 text-sm"
                                placeholder="Tu Nombre"
                                type="text"
                                name="from_name" 
                                id="from_name"
                            />
                        </div>
            
                        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                            <div>
                                <label for="email_id">Email</label>
                                <input
                                class="w-full rounded-lg border-sky-950 border p-3 text-sm"
                                placeholder="Tu Email"
                                type="email"
                                name="email_id" 
                                id="email_id"
                                />
                            </div>
                
                            <div>
                                <label for="telefono">Teléfono</label>
                                <input
                                class="w-full rounded-lg border-sky-950 border p-3 text-sm"
                                placeholder="Tu Telefono"
                                type="tel"
                                id="telefono"
                                name="telefono" 
                                id="telefono"
                                />
                            </div>
                        </div>
            
                        <div>
                            <label for="message">Mensaje</label>
                
                            <textarea
                                class="w-full rounded-lg border-sky-950 border p-3 text-sm"
                                placeholder="Tu Mensaje"
                                rows="8"
                                name="message" 
                                id="message"
                            ></textarea>
                        </div>
                        <input
                            type="submit"
                            class="inline-block w-full rounded-lg bg-sky-950 px-5 py-3 font-medium text-white sm:w-auto cursor-pointer"
                            id="button" 
                            value="Enviar Email"
                        >
                        </input>
                    </form>
                </div>
            </div>
        </div>
        <div class="mb-4 w-full lg:w-2/5 -order-1 lg:order-1 px-8 md:px-0">
            <h3 class="text-white text-lg mb-4 font-bold">Mis Redes Sociales</h3>
            <div class=" space-y-4 flex flex-col">
                <a href="https://github.com/Tinchomay" rel="noopener noreferrer" target="_blank" class="inline-flex gap-2 items-center w-auto self-start hover:scale-105 transition">
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" class="size-7 inline-block" viewBox="0,0,256,256"><g fill="#ffffff" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g transform="scale(8.53333,8.53333)"><path d="M15,3c-6.627,0 -12,5.373 -12,12c0,5.623 3.872,10.328 9.092,11.63c-0.056,-0.162 -0.092,-0.35 -0.092,-0.583v-2.051c-0.487,0 -1.303,0 -1.508,0c-0.821,0 -1.551,-0.353 -1.905,-1.009c-0.393,-0.729 -0.461,-1.844 -1.435,-2.526c-0.289,-0.227 -0.069,-0.486 0.264,-0.451c0.615,0.174 1.125,0.596 1.605,1.222c0.478,0.627 0.703,0.769 1.596,0.769c0.433,0 1.081,-0.025 1.691,-0.121c0.328,-0.833 0.895,-1.6 1.588,-1.962c-3.996,-0.411 -5.903,-2.399 -5.903,-5.098c0,-1.162 0.495,-2.286 1.336,-3.233c-0.276,-0.94 -0.623,-2.857 0.106,-3.587c1.798,0 2.885,1.166 3.146,1.481c0.896,-0.307 1.88,-0.481 2.914,-0.481c1.036,0 2.024,0.174 2.922,0.483c0.258,-0.313 1.346,-1.483 3.148,-1.483c0.732,0.731 0.381,2.656 0.102,3.594c0.836,0.945 1.328,2.066 1.328,3.226c0,2.697 -1.904,4.684 -5.894,5.097c1.098,0.573 1.899,2.183 1.899,3.396v2.734c0,0.104 -0.023,0.179 -0.035,0.268c4.676,-1.639 8.035,-6.079 8.035,-11.315c0,-6.627 -5.373,-12 -12,-12z"></path></g></g>
                    </svg>
                    <p class="text-white font-light">GitHub</p>
                </a>
                <a href="https://www.linkedin.com/in/agustin-sanchez-may-405324211" rel="noopener noreferrer" target="_blank" class=" inline-flex gap-2 items-center self-start hover:scale-105 transition">
                    <svg xmlns="http://www.w3.org/2000/svg" class="size-6 text-white" viewBox="0 0 15 15"><path fill="none" stroke="currentColor" d="M4.5 6v5m6 0V8.5a2 2 0 1 0-4 0V11V6M4 4.5h1M1.5.5h12a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1h-12a1 1 0 0 1-1-1v-12a1 1 0 0 1 1-1Z"/></svg>
                    <p class="text-white font-light">LinkedIn</p>
                </a>
            </div>
            <h3 class="text-white text-lg mb-4 mt-10 font-bold">Medios de Contacto</h3>
            <div >
                <a href="https://wa.me/5213313468467" rel="noopener noreferrer" target="_blank" class=" inline-flex gap-2 items-center hover:scale-105 transition">
                    <svg xmlns="http://www.w3.org/2000/svg" class="size-6" viewBox="0 0 24 24"><path fill="white" d="M19.05 4.91A9.816 9.816 0 0 0 12.04 2c-5.46 0-9.91 4.45-9.91 9.91c0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21c5.46 0 9.91-4.45 9.91-9.91c0-2.65-1.03-5.14-2.9-7.01m-7.01 15.24c-1.48 0-2.93-.4-4.2-1.15l-.3-.18l-3.12.82l.83-3.04l-.2-.31a8.264 8.264 0 0 1-1.26-4.38c0-4.54 3.7-8.24 8.24-8.24c2.2 0 4.27.86 5.82 2.42a8.183 8.183 0 0 1 2.41 5.83c.02 4.54-3.68 8.23-8.22 8.23m4.52-6.16c-.25-.12-1.47-.72-1.69-.81c-.23-.08-.39-.12-.56.12c-.17.25-.64.81-.78.97c-.14.17-.29.19-.54.06c-.25-.12-1.05-.39-1.99-1.23c-.74-.66-1.23-1.47-1.38-1.72c-.14-.25-.02-.38.11-.51c.11-.11.25-.29.37-.43s.17-.25.25-.41c.08-.17.04-.31-.02-.43s-.56-1.34-.76-1.84c-.2-.48-.41-.42-.56-.43h-.48c-.17 0-.43.06-.66.31c-.22.25-.86.85-.86 2.07c0 1.22.89 2.4 1.01 2.56c.12.17 1.75 2.67 4.23 3.74c.59.26 1.05.41 1.41.52c.59.19 1.13.16 1.56.1c.48-.07 1.47-.6 1.67-1.18c.21-.58.21-1.07.14-1.18s-.22-.16-.47-.28"/></svg>
                    <p class="text-white font-light">3313468467</p>
                </a>
                <div>
                    <div class="flex gap-3 lg:gap-4 space-y-2">
                        <button class="flex gap-2 items-center hover:scale-105 transition" id="contactarEmail">
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-6" viewBox="0 0 24 24"><path fill="white" d="M22 6c0-1.1-.9-2-2-2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2zm-2 0l-8 5l-8-5zm0 12H4V8l8 5l8-5z"/></svg>
                            <p class="text-white font-light">agustindacb110@gmail.com</p>
                        </button>
                        <div class="relative copiar">
                            <input type="hidden" value="agustindacb110@gmail.com" id="emailCopiar">
                            <button class=" hover:scale-110 boton-copiar">
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-6" viewBox="0 0 24 24"><g fill="none"><path d="M24 0v24H0V0zM12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035c-.01-.004-.019-.001-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427c-.002-.01-.009-.017-.017-.018m.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093c.012.004.023 0 .029-.008l.004-.014l-.034-.614c-.003-.012-.01-.02-.02-.022m-.715.002a.023.023 0 0 0-.027.006l-.006.014l-.034.614c0 .012.007.02.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01z"/><path fill="white" d="M19 2a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2h-2v2a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h2V4a2 2 0 0 1 2-2zm-4 6H5v12h10zm-5 7a1 1 0 1 1 0 2H8a1 1 0 1 1 0-2zm9-11H9v2h6a2 2 0 0 1 2 2v8h2zm-7 7a1 1 0 0 1 .117 1.993L12 13H8a1 1 0 0 1-.117-1.993L8 11z"/></g></svg>
                            </button>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>
@endsection


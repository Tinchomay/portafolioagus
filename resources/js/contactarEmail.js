const contactarEmail = document.querySelector('#contactarEmail');

if(contactarEmail) {
    contactarEmail.addEventListener('click', function () {
        const email = "agustindacb110@gmail.com";
        const subject = "Me interesa tu perfil Agustin";
        const mailtoLink = `mailto:${email}?subject=${encodeURIComponent(subject)}`;
        window.location.href = mailtoLink;
    })
    
}
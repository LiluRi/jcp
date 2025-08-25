<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/styles.css"> 
        <link rel="stylesheet" href="css/gracias.css"> 
        <script src="https://kit.fontawesome.com/8d48c4a151.js" crossorigin="anonymous"></script> <!--FONTAWESOME -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Imperial+Script&display=swap" rel="stylesheet"> <!--Fuente nombre -->
        <link href="https://fonts.googleapis.com/css2?family=Imperial+Script&family=Roboto:wght@500&display=swap" rel="stylesheet">
	<link rel="icon" type="image" href="img/logo.jpg">
        <title>Jorge Cristian Perez</title>
    </head>
    <div class="superior">
        <?php require_once "superior.php"?>
    </div>
<body>
    <div class="titulo">
        <h1><img src="img/gracias.gif" class="giff">Gracias recibidas</h1>
    </div>
    <div class="container">
        <div class="card green">
            <div class="card-content">
                <p class="nombre"><strong> Virginia Galloni Maggi</strong></p>
                <div class="text"> 
                    Buen dia, mi nombre es Virginia Galloni Maggi, hace dos años en octubre mi madre tuvo un accidente doméstico, su perra le salto y rasguño un brazo y le ingreso una bacteria, ella está inmunodeprimida por tener una enfermedad autoinmune y eso hizo que la infección la descompense y genere una sepsis, osea una infeccion generalizada y termino pasando 21 días en coma!
                    La primera semana de internación le realizaron varias cirugías para limpiar el brazo donde estaba la infección, y nos decían que la situación era crítica, de hecho nos dijeron que mi hermana que no vive en el país debía viajar.
                    Esa semana los partes médicos eran siempre muy malos, y hago hincapié en esa primer semana porque fue luego de esa semana que una amiga que se llama Luciana mujer de David (amigo de Jorge) me sugirió que sume a Jorge en mis rezos. Y lo que yo le comente luego a Luciana es que al día siguiente de incluir a Jorge en mis rezos y pedirle a él además de a todos los otros santos a los que ya le rezaba, los partes médicos comenzaron a ser alentadores o al menos no tan trágicos, literalmente pasaron de decirnos que tenía 5% de probabilidades de vivir a decirnos que había que seguir esperando y no sacar conclusiones ya que ella aún estaba viva!!!!
                    Y así fue ella hoy ya está en su casa, las secuelas son bastante pocas, pudo retomar (luego de un largo periodo de recuperación) su vida casi por completo!!!
                    Saludos,
                    Virginia
                </div>
                <button class="toggle-btn">Ver más</button>
            </div>
        </div>

        <div class="card blue">
            <div class="card-content">
                <p class="nombre"><strong>Daniel</strong></p>
                <div class="text">
                    Daniel, es profesor de lengua y literatura en Tucumán, y se autodefine como pésimo administrador del dinero. A fines del año 2023, entre gastos de fin de año y médicos, las finanzas se desajustaron considerablemente y se quedó en rojo (teniendo que pagar cosas pendientes). Sumado a ello, el problema del país que no le favoreció por la gran inflación, una de las más elevada del mundo. Pensó entonces, en encomendarse a Jorge y le pidió que le diera una mano para salir adelante en esta situación, prometiéndole ser más responsable con los gastos y se comprometió a rezar un rosario y en cada misterio lo tenía presente a Jorge. Al otro día le depositaron una suma interesante de dinero (un pago que estaba mal liquidado del mes anterior) y también tuvo un llamado telefónico de una amiga preguntándole si estaba bien y si necesitaba algo, movida por un impulso interior. Al contarle sus apuros económicos le prestó todo el dinero que necesitaba.  Llegado a fin de mes terminó sobrando plata luego de cumplir con sus obligaciones. Es algo increíble para mí.
                </div>
                <button class="toggle-btn">Ver más</button>
            </div>
        </div>
    </div>


    <div class="inferior">
        <?php require_once "inferior.php"?>
    </div>
</body>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const buttons = document.querySelectorAll(".toggle-btn");

            buttons.forEach((button) => {
                button.addEventListener("click", function () {
                    const text = this.previousElementSibling;
                    text.classList.toggle("expanded");

                    this.textContent = text.classList.contains("expanded") ? "Ver menos" : "Ver más";
                });
            });
        });
    </script>
</html>
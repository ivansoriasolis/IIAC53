<?php
    echo "<pre>";

    //desplazar 15 espacios
    printf("El resultado es $%15f\n", 123.42 / 12);

    //desplazar 15 espacios, rellenar con ceros
    printf("El resultado es $%15f\n", 123.42 / 12);

    //desplazar 15 espacios, 2 lugares decimales de precisión
    printf("El resultado es $%15.2f\n", 123.42 / 12);

    //desplazar 15 espacios, 2 decimales de precisión, comp con ceros
    printf("El resultado es $%015.2f\n", 123.42 / 12);

    //desplazar 15 espacios, 2 decimales de precisión, completado con #
    printf("El resultado es $%'#15.2f\n", 123.42 / 12);
?>
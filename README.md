# PROYECTO FINAL RUTA FORMATIVA PARA MICRO CREDENCIAL "SOFTWARE DEVELOPER" DE LA UNIVERSIDAD EAN
## Prototipo Aplicativo web de sistema de inventario,registro Y facturación de un autoservicio y pequeñas tiendas "MAFFESTORE"
### Introducción
La nueva creacion de los supermercados en la actualidad tienen que estar acompañadas de la tecnologia ya que estos tendran un cambio radical, que se convertiria como efecto dominó en toda la cadena de suministro de la industria alimentaria. Las innovaciones técnicas, tanto online como en las tiendas físicas, así como los cambios en las demandas de los consumidores van a hacer reconfigurar los supermercados del futuro. Un futuro que cada vez está más cerca.

La mayoria de supermercados y pequeñas tiendas actualmente no cuentan con un proceso de manejo de inventarios definido, por lo cual al momento de realizar la toma de  pedidos y facturación de las ventas, se tiene que hacer todo en forma manual, llevando pocos registros claros de sus operaciones realizadas,ocasionando que no se tenga visibilidad o acceso a la información, imposibilitando la gestión eficaz de los recursos disponibles para la distribución a los clientes, la compra de mercancía para tener siempre productos disponibles y la generación de facturas que actualmente las hacen en talonario, lo que podria limitar la posibilidad de sistematizar los procesos; Se propone una solución de aplicativo web  denominado NewMarket! el cual permitirá la gestión de inventarios, registro y facturación, este ayudará a clientes interesados en a llevar un control eficaz de sus actividades como; cantidad de productos vendidos, cantidad de productos en stock, , actualización de productos, y  la impresión de facturas de compra. 

En un mundo empresarial en constante evolución, la necesidad de soluciones tecnológicas efectivas se ha vuelto fundamental para el éxito y la competitividad de las empresas. Consciente de esta realidad, el presente proyecto, titulado "Desarrollo del Prototipo Web 'MAFFESTORE' para Gestión de Inventario y Facturación en Autoservicios y Pequeñas Tiendas," se concibe como una respuesta a la creciente demanda de herramientas que permitan a las pequeñas empresas optimizar sus operaciones y ofrecer un servicio de calidad. 

En el marco de la ruta formativa para la obtención de la insignia de "Software Developer" de la Universidad EAN, este proyecto representa la culminación de los conocimientos adquiridos en áreas cruciales como bases de datos, desarrollo web y programación. A través de la creación de "MAFFESTORE," se busca aplicar estas competencias de manera práctica para abordar los desafíos específicos que enfrentan los autoservicios y las tiendas de menor escala en la actualidad. 

# REQUERIMIENTOS
Este proyecto se centra en el desarrollo de un prototipo aplicativo web llamado "MAFFESTORE" diseñado para la gestión de inventario y facturación en autoservicios y pequeñas tiendas, el alcance del proyecto abarca los siguientes objetivos:

-Frontend y Backend,
-Interfaz de Usuario Completa,
-Registro de Productos en Base de Datos,-Generación de Facturas en PDF (Por Implementar).

se crearon los siguientes requerimientos:
![](https://github.com/Maffemedina/ProyectoMaffeStore/blob/main/requerimientos.png)
# DISEÑO
Para el diseño de la aplicación se trabajó la interfaz de usuarios de menús y opciones permitirá a los usuarios llevar a cabo operaciones de CRUD (Crear, Leer, Actualizar, Borrar) en el registro de clientes. Además, los productos estarán disponibles para visualización en la interfaz, lo que permitirá a los usuarios seleccionar productos y agregarlos a las facturas.


![](https://github.com/Maffemedina/ProyectoMaffeStore/blob/main/MUCKUP%20PAGE%201.jpg),
![](https://github.com/Maffemedina/ProyectoMaffeStore/blob/main/MUCKUP%20PAGE%203.jpg),
![](https://github.com/Maffemedina/ProyectoMaffeStore/blob/main/MUCKUP%20PAGE%202.jpg),

# DESARROLLO BACKEND Y FRONTEND (INTERFAZ DE USUARIO)
En la interfaz de usuario, se implementaron varios elementos y características para brindar una experiencia funcional y efectiva a los usuarios. A continuación, se mencionan algunos de los aspectos que se implementaron en la interfaz del usuario:

**Diseño de Páginas Web:**

Se crearon las páginas web necesarias para permitir a los usuarios interactuar con el sistema. Esto incluye páginas para el registro y gestión de clientes, así como para la visualización y selección de productos.

**Formularios de Registro y Edición:** 

Se diseñaron formularios de registro de clientes que permiten a los usuarios ingresar información personal, como nombre, dirección y contacto. Además, se implementaron formularios de edición para actualizar los datos de los clientes.

**Visualización de Productos:** 

Los productos se muestran de manera clara y organizada en la interfaz de usuario. Los usuarios pueden navegar y buscar productos fácilmente para seleccionarlos y agregarlos a las facturas.

**Botones de Acción:** 

Se incluyeron botones de acción, como "Agregar a Factura" o "Actualizar Cliente," para permitir a los usuarios llevar a cabo acciones específicas en la interfaz.

**Tablas de Facturación:** 

Se diseñó una tabla o lista en la interfaz para mostrar los productos seleccionados y su cantidad en la factura. Los usuarios pueden ver un resumen de los elementos que están a punto de comprar.

## Creacion de la base de datos

### Creacion de la Bases de datos en MYSQL(phpmyadmin)
Se creo la base de datos "proyectobd" con los siguientes parametros 

TABLA clientes:

**IdCliente** INT 

**documentoCliente** VARCHAR (25)

**NombreCliente** VARCHAR (50)

**ApellidoCliente** VARCHAR (50)

**direccionCliente** VARCHAR (50)

**telefonoCliente** INT

**PRIMARYKEY** idCliente(idCliente)
**----------------------------------------//--------------------------------------**
TABLA productos:

**IdProducto** INT

**descripcionProducto** VARCHAR (25)

**precioProducto** DECIMAL (8,3)

**costoProducto** DECIMAL (8,3)

**stockProducto** INT

**PRIMARYKEY** idProducto(idProducto)

**----------------------------------------//--------------------------------------**
TABLA factura_cabecera:

**idFactura** INT 

**idCliente** INT

**fechaFactura** DATETIME

**Subtotal** DECIMAL (8,3)

**Cantidad** INT

**Iva** DECIMAL (8,3)

**Total** DECIMAL (8,3)

**PRIMARYKEY** idFactura(idFactura)

**----------------------------------------//--------------------------------------**
TABLA factura_detalle:

**idFactura** INT 

**idProducto** INT

**cantidad** INT

**Preciounitario** DECIMAL (8,3)

**Subtotal** DECIMAL (8,3)).

### Modelo Conceptual ER
![](https://github.com/Maffemedina/ProyectoBasesdeDatosFACTURACION/blob/main/MODELOCONCEPTUAL-ER.png).
### Modelo Relacional logico
![](https://github.com/Maffemedina/ProyectoBasesdeDatosFACTURACION/blob/main/ModeloRelacionalLogico.png).
### Modelo Relacional 
![](https://github.com/Maffemedina/ProyectoBasesdeDatosFACTURACION/blob/main/ModeloRelacional.png).

### En MYSQL
![](https://github.com/Maffemedina/ProyectoBasesdeDatosFACTURACION/blob/main/CreacionBD.png).

## Desarrollo de la interfaz de usuario

### MODULO INICIO (MENU)
En este modulo se elige las opciones de Registro , Facturacion y Salida, para hacer las respectivas sentencias.
![](https://github.com/Maffemedina/ProyectoMaffeStore/blob/main/INICIO.jpg).

### MODULO REGISTRO (CRUD)
En este modulo entra la informacion del cliente para guardarla en la base de datos y se hace una CRUD donde Ingresa, edita,actualiza y elimina.
![](https://github.com/Maffemedina/ProyectoBasesdeDatosFACTURACION/blob/main/SeccionRegistro.png)
EN MYSQL
![](https://github.com/Maffemedina/ProyectoBasesdeDatosFACTURACION/blob/main/BDclientes.png)

### MODULO FACTURACIÓN 
Este modulo se conforma por dos facturas ("factura_cabecera" y "factura_detalle") Donde se muestra los productos a comprar,  el resumen de compra y guardar la factura.
![](https://github.com/Maffemedina/ProyectoBasesdeDatosFACTURACION/blob/main/SeccionFacturaci%C3%B3n.png).
EN MYSQL
![](https://github.com/Maffemedina/ProyectoBasesdeDatosFACTURACION/blob/main/BDproductos.png).
### SECCION FACTURAS
### factura_cabecera
![](https://github.com/Maffemedina/ProyectoBasesdeDatosFACTURACION/blob/main/BDfactura%20cabecera.png)
### factura_detalle
![](https://github.com/Maffemedina/ProyectoBasesdeDatosFACTURACION/blob/main/BDFactura%20detalle.png)


### Tecnologias Usadas
**IDE:** Visualstudiocode,

**SERVER:** XAMPP

**Backend:** Php , Mysql ,phpmyadmin

**Frontend:** Javascript (AJAX) Html5,Boostrap 4,


 - ![](https://upload.wikimedia.org/wikipedia/commons/thumb/2/27/PHP-logo.svg/1200px-PHP-logo.svg.png) ![](https://upload.wikimedia.org/wikipedia/commons/9/95/PhpMyAdmin_logo.png) ![](data:image/png;base64,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) ![](https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQpngGRjYX1ca7qAADU3K6eGLj7ShQE3L2otdzfryl_Y9Ht2QRoQKYQbsXd36XIxMbYOw0&usqp=CAU)
 ![](https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Visual_Studio_Code_1.35_icon.svg/2048px-Visual_Studio_Code_1.35_icon.svg.png)


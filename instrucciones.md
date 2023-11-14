Repositorio para el control de prospectos
===

Base de datos
---

### 1.- Creación de la base de datos

``` sql
CREATE DATABASE IF NOT EXISTS ci4_dependencias CHARACTER SET utf8 COLLATE utf8_general_ci;
```

### 2.- Creación de la tabla dependencia

``` sql
use ci4_dependencias;
CREATE TABLE IF NOT EXISTS dependencia (
    id                 INT UNSIGNED NOT NULL AUTO_INCREMENT,
    nombre             VARCHAR(200) NOT NULL,
    pagina_web         VARCHAR(200) NULL,
    rubro              VARCHAR(100) NULL,
    contacto_nombre    VARCHAR(200),
    contacto_puesto    VARCHAR(200),
    contacto_telefono  VARCHAR(200),
    contacto_extencion VARCHAR(200),
    contacto_correo    VARCHAR(200),
    estatus            VARCHAR(100),
    obcervaciones      TEXT,
    siglas             VARCHAR(50),
    slug               VARCHAR(200) NOT NULL,
    PRIMARY KEY (id),
    UNIQUE slug (slug)
);
```

### 3 Poblar la tabla dependencias

Ejecute los inserts que siguen acontunuacipon o importe el archivo 

<details>
  <summary>Click me</summary>
  
  ### datos
``` sql
INSERT INTO dependencia VALUES
(1,'Administración del Patrimonio de la Beneficencia Pública (APBP)','https://www.gob.mx/salud/apbp/ ','','','','','','','investigación','','APBP','administracion-del-patrimonio-de-la-beneficencia-publica'),
(2,'Administración Federal de Servicios Educativos en el Distrito Federal (AFSEDF)','https://www.gob.mx/aefcm ','educación','','','','','','investigación','','AFSEDF','administracion-federal-de-servicios-educativos-en-el-distrito-federal'),
(3,'Administración Portuaria Integral de Altamira S.A de C.V (API Altamira)','http://www.puertoaltamira.com.mx/espi/0000001/inicio ','puertos','','','','','','investigación','','API Altamira','administracion-portuaria-integral-de-altamira-sa-de-cv'),
(4,'Administración Portuaria Integral de Coatzacoalcos S.A de C.V (API Coatzacoalcos)','http://www.puertocoatzacoalcos.com.mx/ ','puertos','','','','','','investigación','','API Coatzacoalcos','administracion-portuaria-integral-de-coatzacoalcos-sa-de-cv'),
(5,'Administración Portuaria Integral de Dos Bocas S.A de C.V (API Dos Bocas)','http://www.puertodosbocas.com.mx/ ','puertos','','','','','','investigación','','API Dos Bocas','administracion-portuaria-integral-de-dos-bocas-sa-de-cv'),
(6,'Administración Portuaria Integral de Ensenada S.A de C.V (API Ensenada)','https://www.puertoensenada.com.mx/espi/0000001/inicio ','puertos','','','','','','investigación','','API Ensenada','administracion-portuaria-integral-de-ensenada-sa-de-cv'),
(7,'Administración Portuaria Integral de Guaymas S.A de C.V (API Guaymas)','http://www.puertodeguaymas.com.mx/ ','puertos','','','','','','investigación','','API Guaymas','administracion-portuaria-integral-de-guaymas-sa-de-cv'),
(8,'Administración Portuaria Integral de Lázaro Cárdenas S.A de C.V (API Lázaro Cárdenas)','http://www.puertolazarocardenas.com.mx/plc25/ ','puertos','','','','','','investigación','','API Lázaro Cárdenas','administracion-portuaria-integral-de-lazaro-cardenas-sa-de-cv'),
(9,'Administración Portuaria Integral de Manzanillo S.A de C.V (API Manzanillo)','http://www.puertomanzanillo.com.mx/espi/0000001/inicio ','puertos','','','','','','investigación','','API Manzanillo','administracion-portuaria-integral-de-manzanillo-sa-de-cv'),
(10,'Administración Portuaria Integral de Mazatlán S.A de C.V (API Mazatlán)','http://www.puertomazatlan.com.mx/ ','puertos','','','','','','investigación','','API Mazatlán','administracion-portuaria-integral-de-mazatlan-sa-de-cv'),
(11,'Administración Portuaria Integral de Progreso S.A de C.V (API Progreso)','http://www.puertosyucatan.com/ ','puertos','','','','','','investigación','','API Progreso','administracion-portuaria-integral-de-progreso-sa-de-cv'),
(12,'Administración Portuaria Integral de Puerto Madero S.A de C.V (API Puerto Madero)','http://www.puertochiapas.com.mx/ ','puertos','','','','','','investigación','','API Puerto Madero','administracion-portuaria-integral-de-puerto-madero-sa-de-cv'),
(13,'Administración Portuaria Integral de Salina Cruz S.A de C.V (API Salina Cruz)','http://www.puertosalinacruz.com.mx/espi/0000001/inicio ','puertos','','','','','','investigación','','API Salina Cruz','administracion-portuaria-integral-de-salina-cruz-sa-de-cv'),
(14,'Administración Portuaria Integral de Tampico S.A de C.V (API Tampico)','http://www.puertodetampico.com.mx/ ','puertos','','','','','','investigación','','API Tampico','administracion-portuaria-integral-de-tampico-sa-de-cv'),
(15,'Administración Portuaria Integral de Topolobampo S.A de C.V (API Topolobampo)','http://www.puertotopolobampo.com.mx/ ','puertos','','','','','','investigación','','API Topolobampo','administracion-portuaria-integral-de-topolobampo-sa-de-cv'),
(16,'Administración Portuaria Integral de Tuxpan S.A de C.V (API Tuxpan)','http://www.puertotuxpan.com.mx/ ','puertos','','','','','','investigación','','API Tuxpan','administracion-portuaria-integral-de-tuxpan-sa-de-cv'),
(17,'Administración Portuaria Integral de Veracruz S.A de C.V (API Veracruz)','https://www.puertodeveracruz.com.mx/wordpress/ ','puertos','','','','','','investigación','','API Veracruz','administracion-portuaria-integral-de-veracruz-sa-de-cv'),
(18,'Administración Portuaria Integral Puerto Vallarta S.A de C.V (API Puerto Vallarta)','http://www.puertodevallarta.com.mx/ ','puertos','','','','','','investigación','','API Puerto Vallarta','administracion-portuaria-integral-puerto-vallarta-sa-de-cv'),
(19,'Aeropuerto Internacional de la Ciudad de México, S.A. de C.V. (AICM)','http://www.aicm.com.mx/ ','','','','','','','investigación','','AICM','aeropuerto-internacional-de-la-ciudad-de-mexico-sa-de-cv'),
(20,'Aeropuertos y Servicios Auxiliares (ASA)','http://www.gob.mx/asa ','','','','','','','investigación','','ASA','aeropuertos-y-servicios-auxiliares'),
(21,'Agencia de Investigación Criminal (AIC)','http://www.pgr.gob.mx/Documents/AIC.html ','','','','','','','investigación','','AIC','agencia-de-investigacion-criminal'),
(22,'Agencia de Seguridad, Energía y Ambiente (ASEA)','https://www.gob.mx/asea/ ','','','','','','','investigación','','ASEA','agencia-de-seguridad-energia-y-ambiente'),
(23,'Agencia de Servicios a la Comercialización y Desarrollo de Mercados Agropecuarios , antes Apoyos y Servicios a la Comercialización Agropecuaria (ASERCA)','https://www.gob.mx/aserca ','','','','','','','investigación','','ASERCA','agencia-de-servicios-a-la-comercializacion-y-desarrollo-de-mercados-agropecuarios--antes-apoyos-y-servicios-a-la-comercializacion-agropecuaria'),
(24,'Agencia Espacial Mexicana (AEM)','http://www.gob.mx/aem ','','','','','','','investigación','','AEM','agencia-espacial-mexicana'),
(25,'Agencia Mexicana de Cooperación Internacional para el Desarrollo (AMEXCID)','http://www.gob.mx/amexcid ','','','','','','','investigación','','AMEXCID','agencia-mexicana-de-cooperacion-internacional-para-el-desarrollo'),
(26,'AGROASEMEX S.A','http://www.gob.mx/agroasemex ','','','','','','','investigación','','','agroasemex-sa'),
(27,'Archivo General de la Nación (AGN)','http://www.gob.mx/agn ','','','','','','','investigación','','AGN','archivo-general-de-la-nacion'),
(28,'Banco de México (BM)','http://www.banxico.org.mx/ ','bancos','','','','','','investigación','','BM','banco-de-mexico'),
(29,'Banco del Ahorro Nacional y Servicios Financieros S.N.C. (BANSEFI)','https://www.gob.mx/bansefi/ ','bancos','','','','','','investigación','','BANSEFI','banco-del-ahorro-nacional-y-servicios-financieros-snc'),
(30,'Banco Nacional de Comercio Exterior S.N.C (BANCOMEXT)','http://www.gob.mx/bancomext ','bancos','','','','','','investigación','','BANCOMEXT','banco-nacional-de-comercio-exterior-snc'),
(31,'Banco Nacional de Obras y Servicios Públicos S.N.C (BANOBRAS)','http://www.gob.mx/banobras ','bancos','','','','','','investigación','','BANOBRAS','banco-nacional-de-obras-y-servicios-publicos-snc'),
(32,'Banco Nacional del Ejército, Fuerza Aérea y Armada S.N.C (BANJERCITO)','https://www.gob.mx/banjercito ','bancos','','','','','','investigación','','BANJERCITO','banco-nacional-del-ejercito-fuerza-aerea-y-armada-snc'),
(33,'Caminos y Puentes Federales de Ingresos y Servicios Conexos (CAPUFE)','http://www.capufe.gob.mx/site/wwwCapufeFinal.html ','','','','','','','investigación','','CAPUFE','caminos-y-puentes-federales-de-ingresos-y-servicios-conexos'),
(34,'Casa de Moneda de México (CMM)','http://www.gob.mx/cmm ','','','','','','','investigación','','CMM','casa-de-moneda-de-mexico'),
(35,'Centro de Capacitación Cinematográfica A.C (CCC)','http://www.elccc.com.mx/sitio/ ','educación','','','','','','investigación','','CCC','centro-de-capacitacion-cinematografica-ac'),
(36,'Centro de Enseñanza Técnica Industrial (CETI)','https://www.ceti.mx/cetinew/index.php ','educación','','','','','','investigación','','CETI','centro-de-enseñanza-tecnica-industrial'),
(37,'Centro de Evaluación y Control de Confianza  (CECC)','http://www.pgr.gob.mx/Transparencia/Paginas/Evalucion-y-Control-de-Confianza.aspx ','educación','','','','','','investigación','','CECC','centro-de-evaluacion-y-control-de-confianza- '),
(38,'Centro de ingeniería y Desarrollo Industrial (CIDESI)','https://www.cidesi.com/site/ ','educación','','','','','','investigación','','CIDESI','centro-de-ingenieria-y-desarrollo-industrial'),
(39,'Centro de Innovación Aplicada en Tecnologías Competitivas (CIATEC, A.C.)','http://www.ciatec.mx/ ','educación','','','','','','investigación','','CIATEC, A.C.','centro-de-innovacion-aplicada-en-tecnologias-competitivas'),
(40,'Centro de Investigación Científica de Yucatán A.C (CECY)','http://www.cicy.mx/ ','educación','','','','','','investigación','','CECY','centro-de-investigacion-cientifica-de-yucatan-ac'),
(41,'Centro de Investigación Científica y de Educación Superior de Ensenada Baja California (CICESE)','http://www.cicese.edu.mx/#modal-one ','educación','','','','','','investigación','','CICESE','centro-de-investigacion-cientifica-y-de-educacion-superior-de-ensenada-baja-california'),
(42,'Centro de Investigación en Alimentación y Desarrollo A.C. (CIAD)','http://www.ciad.mx/ ','educación','','','','','','investigación','','CIAD','centro-de-investigacion-en-alimentacion-y-desarrollo-ac'),
(43,'Centro de Investigación en Geografía y Geomática “Ing. Jorge L. Tamayo” A.C. (CentroGeo)','http://www.centrogeo.org.mx/ ','educación','','','','','','investigación','','CentroGeo','centro-de-investigacion-en-geografia-y-geomatica-“ing-jorge-l-tamayo”-ac'),
(44,'Centro de Investigación en Matemáticas A.C. (CIMAT)','http://www.cimat.mx/ ','educación','','','','','','investigación','','CIMAT','centro-de-investigacion-en-matematicas-ac'),
(45,'Centro de Investigación en Materiales Avanzados S.C (CIMAV)','http://cimav.edu.mx/ ','educación','','','','','','investigación','','CIMAV','centro-de-investigacion-en-materiales-avanzados-sc'),
(46,'Centro de Investigación en Química Aplicada (CIQA)','http://www.ciqa.mx/ ','educación','','','','','','investigación','','CIQA','centro-de-investigacion-en-quimica-aplicada'),
(47,'Centro de Investigación y Asistencia en Tecnología y Diseño del Estado de Jalisco A.C. (CIATEJ)','http://ciatej.mx/ ','educación','','','','','','investigación','','CIATEJ','centro-de-investigacion-y-asistencia-en-tecnologia-y-diseño-del-estado-de-jalisco-ac'),
(48,'Centro de Investigación y Desarrollo Tecnológico en Electroquímica S.C (CIDETEQ)','http://www.cideteq.mx/ ','educación','','','','','','investigación','','CIDETEQ','centro-de-investigacion-y-desarrollo-tecnologico-en-electroquimica-sc'),
(49,'Centro de Investigación y Docencia Económicas A.C. (CIDE)','http://www.cide.edu/ ','educación','','','','','','investigación','','CIDE','centro-de-investigacion-y-docencia-economicas-ac'),
(50,'Centro de Investigación y Estudios Avanzados del Instituto Politécnico Nacional (CINVESTAV)','http://www.cinvestav.mx/ ','educación','','','','','','investigación','','CINVESTAV','centro-de-investigacion-y-estudios-avanzados-del-instituto-politecnico-nacional'),
(51,'Centro de Investigaciones Biológicas del Noreste S.C (Cibnor)','http://www.cibnor.gob.mx/ ','educación','','','','','','investigación','','Cibnor','centro-de-investigaciones-biologicas-del-noreste-sc'),
(52,'Centro de Investigaciones en Óptica A.C. (CIO)','http://www.cio.mx/ ','educación','','','','','','investigación','','CIO','centro-de-investigaciones-en-optica-ac'),
(53,'Centro de investigaciones y Estudios Superiores en Antropología Social (CIESAS)','http://www.ciesas.edu.mx/ ','educación','','','','','','investigación','','CIESAS','centro-de-investigaciones-y-estudios-superiores-en-antropologia-social'),
(54,'Centro de Tecnología Avanzada (CIATEQ, A.C.)','http://www.ciateq.mx/ ','educación','','','','','','investigación','','CIATEQ, A.C.','centro-de-tecnologia-avanzada'),
(55,'Centro Federal de Protección a Personas','http://cepropie.gob.mx/ ','educación','','','','','','investigación','','','centro-federal-de-proteccion-a-personas'),
(56,'Centro Nacional de Control de Energía (CENACE)','http://www.gob.mx/cenace ','educación','','','','','','investigación','','CENACE','centro-nacional-de-control-de-energia'),
(57,'Centro Nacional de Control del Gas Natural (CENAGAS)','http://www.gob.mx/cenagas ','educación','','','','','','investigación','','CENAGAS','centro-nacional-de-control-del-gas-natural'),
(58,'Centro Nacional de Equidad de Género y Salud Reproductiva (CNEGSR)','https://www.gob.mx/salud/cnegsr ','educación','','','','','','investigación','','CNEGSR','centro-nacional-de-equidad-de-genero-y-salud-reproductiva'),
(59,'Centro Nacional de Excelencia Tecnológica en Salud (CENETEC)  ','https://www.gob.mx/salud/cenetec ','educación','','','','','','investigación','','CENETEC','centro-nacional-de-excelencia-tecnologica-en-salud'),
(60,'Centro Nacional de Inteligencia (CNI)','http://www.gob.mx/cni ','educación','','','','','','investigación','','CNI','centro-nacional-de-inteligencia'),
(61,'Centro Nacional de la Transfusión Sanguínea (CNTS)','http://www.cnts.salud.gob.mx/ ','educación','','','','','','investigación','','CNTS','centro-nacional-de-la-transfusion-sanguinea'),
(62,'Centro Nacional de Metrología (CENAM)','http://www.gob.mx/cenam ','educación','','','','','','investigación','','CENAM','centro-nacional-de-metrologia'),
(63,'Centro Nacional de Prevención de Desastres (CENAPRED)','https://www.gob.mx/cenapred ','educación','','','','','','investigación','','CENAPRED','centro-nacional-de-prevencion-de-desastres'),
(64,'Centro Nacional de Programas Preventivos y Control de Enfermedades (CENAPRECE)','https://www.gob.mx/salud/cenaprece ','educación','','','','','','investigación','','CENAPRECE','centro-nacional-de-programas-preventivos-y-control-de-enfermedades'),
(65,'Centro Nacional de Trasplantes (CENATRA)','https://www.gob.mx/cenatra/ ','educación','','','','','','investigación','','CENATRA','centro-nacional-de-trasplantes'),
(66,'Centro Nacional para la Prevención y el Control de las Adicciones (CENADIC)','https://www.gob.mx/salud%7Cconadic/ ','educación','','','','','','investigación','','CENADIC','centro-nacional-para-la-prevencion-y-el-control-de-las-adicciones'),
(67,'Centro Nacional para la Prevención y el Control del VIH/SIDA (CENSIDA)','https://www.gob.mx/censida ','educación','','','','','','investigación','','CENSIDA','centro-nacional-para-la-prevencion-y-el-control-del-vih-sida'),
(68,'Centro Nacional para la Salud de la Infancia y la Adolescencia (CENSIA)','https://www.gob.mx/salud/censia/ ','educación','','','','','','investigación','','CENSIA','centro-nacional-para-la-salud-de-la-infancia-y-la-adolescencia'),
(69,'Centro Regional de Alta Especialidad de Chiapas (CRAE)','https://www.gob.mx/salud/crae ','educación','','','','','','investigación','','CRAE','centro-regional-de-alta-especialidad-de-chiapas'),
(70,'Centros de Integración Juvenil, A.C. (CIJ)','https://www.gob.mx/salud/cij/ ','educación','','','','','','investigación','','CIJ','centros-de-integracion-juvenil-ac'),
(71,'Colegio de Bachilleres','https://www.gob.mx/bachilleres ','educación','','','','','','investigación','','','colegio-de-bachilleres'),
(72,'Colegio de Postgraduados (COLPOS)','http://www.colpos.mx/wb/ ','educación','','','','','','investigación','','COLPOS','colegio-de-postgraduados'),
(73,'Colegio Nacional de Educación Profesional Técnica (CONALEP)','https://www.gob.mx/conalep ','educación','','','','','','investigación','','CONALEP','colegio-nacional-de-educacion-profesional-tecnica'),
(74,'Colegio Superior Agropecuario del Estado de Guerrero (CSAEGRO)','https://csaegro.sader.gob.mx/ ','educación','','','','','','investigación','','CSAEGRO','colegio-superior-agropecuario-del-estado-de-guerrero'),
(75,'Comisión Coordinadora de Institutos Nacionales de Salud y Hospitales de Alta Especialidad (CCINSHAE)','http://www.gob.mx/insalud ','salud','','','','','','investigación','','CCINSHAE','comision-coordinadora-de-institutos-nacionales-de-salud-y-hospitales-de-alta-especialidad'),
(76,'Comisión de Operación y Fomento de Actividades Académicas del Instituto Politécnico Nacional (COFAA IPN)','http://www.cofaa.ipn.mx/ ','','','','','','','investigación','','COFAA IPN','comision-de-operacion-y-fomento-de-actividades-academicas-del-instituto-politecnico-nacional'),
(77,'Comisión Ejecutiva de Atención a Víctimas (CEAV)','http://www.gob.mx/ceav ','','','','','','','investigación','','CEAV','comision-ejecutiva-de-atencion-a-victimas'),
(78,'Comisión Federal de Electricidad (CFE)','http://www.cfe.gob.mx/Pages/Index.aspx ','','','','','','','investigación','','CFE','comision-federal-de-electricidad'),
(79,'Comisión Federal para la Protección contra Riesgos Sanitarios (COFEPRIS)','https://www.gob.mx/cofepris ','','','','','','','investigación','','COFEPRIS','comision-federal-para-la-proteccion-contra-riesgos-sanitarios'),
(80,'Comisión Intersecretarial para el Desarrollo del Gobierno Electrónico (CIDGE)','http://www.gob.mx/cidge ','','','','','','','investigación','','CIDGE','comision-intersecretarial-para-el-desarrollo-del-gobierno-electronico'),
(81,'Comisión Nacional Bancaria y de Valores (CNBV)','http://www.gob.mx/cnbv ','','','','','','','investigación','','CNBV','comision-nacional-bancaria-y-de-valores'),
(82,'Comisión Nacional de Acuacultura y Pesca (CONAPESCA)','http://www.gob.mx/conapesca ','','','','','','','investigación','','CONAPESCA','comision-nacional-de-acuacultura-y-pesca'),
(83,'Comisión Nacional de Arbitraje Médico (CONAMED)','http://www.gob.mx/conamed ','','','','','','','investigación','','CONAMED','comision-nacional-de-arbitraje-medico'),
(84,'Comisión Nacional de Áreas Naturales Protegidas (CONANP)','http://www.gob.mx/conanp ','','','','','','','investigación','','CONANP','comision-nacional-de-areas-naturales-protegidas'),
(85,'Comisión Nacional de Cultura Física y Deporte (CONADE)','http://www.gob.mx/conade ','','','','','','','investigación','','CONADE','comision-nacional-de-cultura-fisica-y-deporte'),
(86,'Comisión Nacional de Hidrocarburos (CNH)','http://www.gob.mx/cnh ','','','','','','','investigación','','CNH','comision-nacional-de-hidrocarburos'),
(87,'Comisión Nacional de Libros de Texto Gratuitos (CONALITEG)','https://www.gob.mx/conaliteg ','','','','','','','investigación','','CONALITEG','comision-nacional-de-libros-de-texto-gratuitos'),
(88,'Comisión Nacional de los Salarios Mínimos (CONASAMI)','http://www.gob.mx/conasami ','','','','','','','investigación','','CONASAMI','comision-nacional-de-los-salarios-minimos'),
(89,'Comisión Nacional de Mejora Regulatoria (CONAMER)','https://www.gob.mx/conamer ','','','','','','','investigación','','CONAMER','comision-nacional-de-mejora-regulatoria'),
(90,'Comisión Nacional de Protección Social en la Salud (CNPSS)','https://www.gob.mx/salud/seguropopular ','','','','','','','investigación','','CNPSS','comision-nacional-de-proteccion-social-en-la-salud'),
(91,'Comisión Nacional de Seguridad Nuclear y Salvaguardias (CNSNS)','https://www.gob.mx/cnsns ','','','','','','','investigación','','CNSNS','comision-nacional-de-seguridad-nuclear-y-salvaguardias'),
(92,'Comisión Nacional de Seguros y Fianzas (CNSF)','http://www.gob.mx/cnsf','','','','','','','investigación','','CNSF','comision-nacional-de-seguros-y-fianzas'),
(93,'Comisión Nacional de Vivienda (CONAVI)','http://www.gob.mx/conavi ','','','','','','','investigación','','CONAVI','comision-nacional-de-vivienda'),
(94,'Comisión Nacional de Zonas Áridas (CONAZA)','https://www.gob.mx/conaza ','','','','','','','investigación','','CONAZA','comision-nacional-de-zonas-aridas'),
(95,'Comisión Nacional del Agua (CONAGUA)','http://www.gob.mx/conagua ','','','','','','','investigación','','CONAGUA','comision-nacional-del-agua'),
(96,'Comisión Nacional del Sistema de Ahorro para el Retiro (CONSAR)','http://www.gob.mx/consar ','','','','','','','investigación','','CONSAR','comision-nacional-del-sistema-de-ahorro-para-el-retiro'),
(97,'Comisión Nacional Forestal (CONAFOR)','http://www.gob.mx/conafor ','','','','','','','investigación','','CONAFOR','comision-nacional-forestal'),
(98,'Comisión Nacional para el Conocimiento y Uso de la Biodiversidad (CONABIO)','https://www.gob.mx/conabio ','','','','','','','investigación','','CONABIO','comision-nacional-para-el-conocimiento-y-uso-de-la-biodiversidad'),
(99,'Comisión Nacional para el Uso Eficiente de la Energía (CONUEE)','http://www.gob.mx/conuee ','','','','','','','investigación','','CONUEE','comision-nacional-para-el-uso-eficiente-de-la-energia'),
(100,'Comisión Nacional para la Protección y la Defensa de los Usuarios de Servicios Financieros (CONDUSEF)','http://www.gob.mx/condusef ','','','','','','','investigación','','CONDUSEF','comision-nacional-para-la-proteccion-y-la-defensa-de-los-usuarios-de-servicios-financieros'),
(101,'Comisión Nacional para Prevenir y Erradicar la Violencia Contra las Mujeres (CONVIM)','http://www.gob.mx/conavim ','','','','','','','investigación','','CONVIM','comision-nacional-para-prevenir-y-erradicar-la-violencia-contra-las-mujeres'),
(102,'Comisión para el Diálogo con los Pueblos Indígenas de México (CDPIM)','http://www.cdpim.gob.mx/v4/ ','','','','','','','investigación','','CDPIM','comision-para-el-dialogo-con-los-pueblos-indigenas-de-mexico'),
(103,'Comisión para la Regularización de la Tenencia de la Tierra (CORETT)','https://www.gob.mx/insus ','','','','','','','investigación','','CORETT','comision-para-la-regularizacion-de-la-tenencia-de-la-tierra'),
(104,'Comisión para la Seguridad y el Desarrollo Integral en el Estado de Michoacán','http://www.ordenjuridico.gob.mx/listDependencia.php?%20idEst=437&poder=ejecutivo&liberado=no ','','','','','','','investigación','','','comision-para-la-seguridad-y-el-desarrollo-integral-en-el-estado-de-michoacan'),
(105,'Comisión Reguladora de Energía Órgano Regulador Coordinado en Materia Energética (CRE)','http://www.gob.mx/cre ','','','','','','','investigación','','CRE','comision-reguladora-de-energia-organo-regulador-coordinado-en-materia-energetica'),
(106,'Comité Nacional Mixto de Protección al Salario (CONAMPROS)','https://www.gob.mx/conampros ','','','','','','','investigación','','CONAMPROS','comite-nacional-mixto-de-proteccion-al-salario'),
(107,'Comité Nacional para el Desarrollo Sustentable de la Caña de Azúcar(CONADESUCA)','https://www.gob.mx/conadesuca/ ','','','','','','','investigación','','CONADESUCA','comite-nacional-para-el-desarrollo-sustentable-de-la-caña-de-azucar'),
(108,'Compañía Mexicana de Exploraciones S.A de C.V (COMESA)','http://www.comesa.mx/ ','','','','','','','investigación','','COMESA','compañia-mexicana-de-exploraciones-sa-de-cv'),
(109,'Compañía Operadora del Centro Cultural y Turístico de Tijuana S.A de C.V (CECUT)','http://www.cecut.gob.mx/ ','educación','','','','','','investigación','','CECUT','compañia-operadora-del-centro-cultural-y-turistico-de-tijuana-sa-de-cv'),
(110,'Consejería Jurídica del Ejecutivo Federal (CJEF)','http://www.gob.mx/cjef ','','','','','','','investigación','','CJEF','consejeria-juridica-del-ejecutivo-federal'),
(111,'Consejo de Menores','http://www.cns.gob.mx/portalWebApp/wlp.c?__c=1014 ','','','','','','','investigación','','','consejo-de-menores'),
(112,'Consejo de Promoción Turística de México (CPTM)','http://www.cptm.com.mx/ ','','','','','','','investigación','','CPTM','consejo-de-promocion-turistica-de-mexico'),
(113,'Consejo Nacional de Ciencia y Tecnología (CONACYT)','http://www.conacyt.gob.mx/ ','educación','','','','','','investigación','','CONACYT','consejo-nacional-de-ciencia-y-tecnologia'),
(114,'Consejo Nacional de Evaluaciones de la Política de Desarrollo Social (CONEVAL)','https://www.coneval.org.mx/Paginas/principal.aspx ','','','','','','','investigación','','CONEVAL','consejo-nacional-de-evaluaciones-de-la-politica-de-desarrollo-social'),
(115,'Consejo Nacional de Fomento Educativo (CONAFE)','http://www.gob.mx/conafe ','educación','','','','','','investigación','','CONAFE','consejo-nacional-de-fomento-educativo'),
(116,'Consejo Nacional de Normalización y Certificación de Competencias Laborales (CONOCER)','http://conocer.gob.mx/ ','','','','','','','investigación','','CONOCER','consejo-nacional-de-normalizacion-y-certificacion-de-competencias-laborales'),
(117,'Consejo Nacional de Población (CONAPO)','https://www.gob.mx/conapo ','','','','','','','investigación','','CONAPO','consejo-nacional-de-poblacion'),
(118,'Consejo Nacional para el Desarrollo y la Inclusión de las Personas con discapacidad (CONADIS)','http://www.gob.mx/conadis ','','','','','','','investigación','','CONADIS','consejo-nacional-para-el-desarrollo-y-la-inclusion-de-las-personas-con-discapacidad'),
(119,'Consejo Nacional para la Cultura y las Artes (CONACULTA)','http://www.conaculta.gob.mx/ ','','','','','','','investigación','','CONACULTA','consejo-nacional-para-la-cultura-y-las-artes'),
(120,'Consejo Nacional para Prevenir la Discriminación (CONAPRED)','http://www.conapred.org.mx/ ','','','','','','','investigación','','CONAPRED','consejo-nacional-para-prevenir-la-discriminacion'),
(121,'Coordinación General @prende.mx (aprendemx)','http://www.gob.mx/aprendemx ','','','','','','','investigación','','aprendemx','coordinacion-general-@prendemx'),
(122,'Coordinación General de la Comisión Mexicana de Ayuda a los Refugiados (COMAR)','http://www.gob.mx/comar ','','','','','','','investigación','','COMAR','coordinacion-general-de-la-comision-mexicana-de-ayuda-a-los-refugiados'),
(123,'Coordinación Nacional Antisecuestro (CONASE)','http://www.ordenjuridico.gob.mx/listDependencia.php?idEst=438&poder=ejecutivo&liberado=no ','','','','','','','investigación','','CONASE','coordinacion-nacional-antisecuestro'),
(124,'Coordinación Nacional del Servicio Profesional Docente (CNSPD)','http://servicioprofesionaldocente.sep.gob.mx/ ','','','','','','','investigación','','CNSPD','coordinacion-nacional-del-servicio-profesional-docente'),
(125,'Coordinación para la Atención Integral de la Migración en la Frontera Sur (CAIMFS)','http://www.ordenjuridico.gob.mx/listDependencia.php?idEst=440&poder=ejecutivo&liberado=no ','','','','','','','investigación','','CAIMFS','coordinacion-para-la-atencion-integral-de-la-migracion-en-la-frontera-sur'),
(126,'Corporación de Servicios al Turista Ángeles Verdes (AV)','https://www.gob.mx/sectur/ ','','','','','','','investigación','','AV','corporacion-de-servicios-al-turista-angeles-verdes'),
(127,'Corporación Mexicana de Investigación en Materiales, S.A. de C.V. (COMIMSA)','http://www.comimsa.com.mx/ ','','','','','','','investigación','','COMIMSA','corporacion-mexicana-de-investigacion-en-materiales-sa-de-cv'),
(128,'Crezcamos Juntos','http://www.gob.mx/crezcamosjuntos ','','','','','','','investigación','','','crezcamos-juntos'),
(129,'DICONSA','http://www.gob.mx/diconsa ','','','','','','','investigación','','','diconsa'),
(130,'EDUCAL','http://www.educal.com.mx/ ','educación','','','','','','investigación','','','educal'),
(131,'El Colegio de la Frontera Norte (Colef)','http://www.colef.mx ','educación','','','','','','investigación','','Colef','el-colegio-de-la-frontera-norte'),
(132,'El Colegio de la Frontera Sur (ECOSUR)','http://www.ecosur.mx/ ','educación','','','','','','investigación','','ECOSUR','el-colegio-de-la-frontera-sur'),
(133,'El Colegio de México (COLMEX)','http://www.colmex.mx/ ','educación','','','','','','investigación','','COLMEX','el-colegio-de-mexico'),
(134,'El Colegio de Michoacán (COLMICH)','http://www.colmich.edu.mx/ ','educación','','','','','','investigación','','COLMICH','el-colegio-de-michoacan'),
(135,'El Colegio de San Luis (COLSAN)','http://www.colsan.edu.mx/ ','educación','','','','','','investigación','','COLSAN','el-colegio-de-san-luis'),
(136,'Estudios Churubusco Azteca (Estudios Churubusco)','http://www.estudioschurubusco.com/ ','','','','','','','investigación','','Estudios Churubusco','estudios-churubusco-azteca'),
(137,'Exportadora de Sal (ESSA)','https://www.gob.mx/essa ','','','','','','','investigación','','ESSA','exportadora-de-sal'),
(138,'Ferrocarril del Istmo de Tehuantepec (FERROISTMO)','http://www.ferroistmo.com.mx/ ','','','','','','','investigación','','FERROISTMO','ferrocarril-del-istmo-de-tehuantepec'),
(139,'Ferrocarriles Nacionales de México (FNML) (en proceso de desincorporación)','https://www.fnm.com.mx/ ','','','','','','','investigación','en proceso de desincorporación)','FNML','ferrocarriles-nacionales-de-mexico'),
(140,'Fideicomiso de Fomento Minero (FIFOMI)','https://www.gob.mx/fifomi/ ','','','','','','','investigación','','FIFOMI','fideicomiso-de-fomento-minero'),
(141,'Fideicomiso de Formación y Capacitación para el Personal de la Marina Mercante Nacional (FIDENA)','http://www.fidena.gob.mx/# ','','','','','','','investigación','','FIDENA','fideicomiso-de-formacion-y-capacitacion-para-el-personal-de-la-marina-mercante-nacional'),
(142,'Fideicomiso de Riesgo Compartido (FIRCO)','https://www.gob.mx/firco ','','','','','','','investigación','','FIRCO','fideicomiso-de-riesgo-compartido'),
(143,'Fideicomiso Fondo Nacional de Fomento Ejidal (FIFONAFE)','https://www.gob.mx/fifonafe ','','','','','','','investigación','','FIFONAFE','fideicomiso-fondo-nacional-de-fomento-ejidal'),
(144,'Fideicomiso Fondo Nacional de Habitaciones Populares (FONHAPO)','http://www.gob.mx/fonhapo ','','','','','','','investigación','','FONHAPO','fideicomiso-fondo-nacional-de-habitaciones-populares'),
(145,'Fideicomiso para la Cineteca Nacional','http://www.cinetecanacional.net/ ','','','','','','','investigación','','','fideicomiso-para-la-cineteca-nacional'),
(146,'Fideicomisos Instituidos en Relación con la Agricultura (FIRA)','https://www.gob.mx/fira ','','','','','','','investigación','','FIRA','fideicomisos-instituidos-en-relacion-con-la-agricultura'),
(147,'Financiera Nacional de Desarrollo Agropecuario, Rural, Forestal y Pesquero (FND)','http://www.gob.mx/fnd ','','','','','','','investigación','','FND','financiera-nacional-de-desarrollo-agropecuario-rural-forestal-y-pesquero'),
(148,'Fonatur Constructora','http://www.fonaturconstructora.gob.mx/es/index.asp ','','','','','','','investigación','','','fonatur-constructora'),
(149,'Fonatur Mantenimiento Turístico','http://www.fmt.gob.mx/es/index.asp ','','','','','','','investigación','','','fonatur-mantenimiento-turistico'),
(150,'Fonatur Operadora Portuaria','https://www.gob.mx/fop ','puertos','','','','','','investigación','','','fonatur-operadora-portuaria'),
(151,'Fondo de capitalización e Inversión del Sector Rural (FOCIR)','http://www.gob.mx/focir ','','','','','','','investigación','','FOCIR','fondo-de-capitalizacion-e-inversion-del-sector-rural'),
(152,'Fondo de Cultura Económica (FCE)','http://www.fondodeculturaeconomica.com/ ','','','','','','','investigación','','FCE','fondo-de-cultura-economica'),
(153,'Fondo de Empresas Expropiadas del Sector Azucarero (FEESA)  ','https://www.gob.mx/sader ','','','','','','','investigación','','FEESA','fondo-de-empresas-expropiadas-del-sector-azucarero'),
(154,'Fondo de Garantía y Fomento para la Agricultura , Ganadería y Avicultura (FONDO)','http://www.fira.gob.mx/Nd/index.jsp ','','','','','','','investigación','','FONDO','fondo-de-garantia-y-fomento-para-la-agricultura--ganaderia-y-avicultura'),
(155,'Fondo de Garantía y Fomento para las Actividades Pesqueras (FOPESCA)','https://www.fira.gob.mx/Nd/index.jsp ','','','','','','','investigación','','FOPESCA','fondo-de-garantia-y-fomento-para-las-actividades-pesqueras'),
(156,'Fondo de la Vivienda del Instituto de Seguridad y Servicios Sociales de los Trabajadores del Estado (FOVISSSTE)','http://www.gob.mx/fovissste ','','','','','','','investigación','','FOVISSSTE','fondo-de-la-vivienda-del-instituto-de-seguridad-y-servicios-sociales-de-los-trabajadores-del-estado'),
(157,'Fondo de Operación y Financiamiento Bancario a la Vivienda (FOVI)','http://www.fovi.gob.mx/ ','','','','','','','investigación','','FOVI','fondo-de-operacion-y-financiamiento-bancario-a-la-vivienda'),
(158,'Fondo Especial de Asistencia Técnica y Garantía para Créditos Agropecuarios (FEGA)','https://www.fira.gob.mx/Nd/index.jsp ','','','','','','','investigación','','FEGA','fondo-especial-de-asistencia-tecnica-y-garantia-para-creditos-agropecuarios'),
(159,'Fondo Nacional de Fomento al Turismo (FONATUR)','https://www.gob.mx/fonatur ','','','','','','','investigación','','FONATUR','fondo-nacional-de-fomento-al-turismo'),
(160,'Fondo Nacional de Pensiones de los Trabajadores del Estado (PENSIONISSSTE)','https://www.gob.mx/pensionissste ','','','','','','','investigación','','PENSIONISSSTE','fondo-nacional-de-pensiones-de-los-trabajadores-del-estado'),
(161,'Fondo nacional para el Desarrollo de los Recursos Humanos (FIDERH)','http://www.fiderh.org.mx/ ','','','','','','','investigación','','FIDERH','fondo-nacional-para-el-desarrollo-de-los-recursos-humanos'),
(162,'Fondo Nacional para el Fomento de las Artesanías (FONART)','https://www.gob.mx/fonart ','','','','','','','investigación','','FONART','fondo-nacional-para-el-fomento-de-las-artesanias'),
(163,'Grupo Aeroportuario de la Ciudad de México (GACM)','http://www.gob.mx/naicm ','','','','','','','investigación','','GACM','grupo-aeroportuario-de-la-ciudad-de-mexico'),
(164,'Hospital de Alta Especialidad de Ixtapaluca (HRAEI)','http://www.hraei.gob.mx/ ','salud','','','','','','investigación','','HRAEI','hospital-de-alta-especialidad-de-ixtapaluca'),
(165,'Hospital General de México Dr. Eduardo Liceaga (HGM)','http://www.hgm.salud.gob.mx/ ','salud','','','','','','investigación','','HGM','hospital-general-de-mexico-dr-eduardo-liceaga'),
(166,'Hospital General Dr. Manuel Gea González','https://www.gob.mx/salud/hospitalgea ','salud','','','','','','investigación','','','hospital-general-dr-manuel-gea-gonzalez'),
(167,'Hospital Infantil de México Dr. Federico Gómez (HIMFG)','https://www.gob.mx/salud/himfg ','salud','','','','','','investigación','','HIMFG','hospital-infantil-de-mexico-dr-federico-gomez'),
(168,'Hospital Juárez de México (HJM)','https://www.gob.mx/salud/hjm ','salud','','','','','','investigación','','HJM','hospital-juarez-de-mexico'),
(169,'Hospital Regional de Alta Especialidad Ciudad Victoria “Bicentenario 2010” I.I.I. Servicios S.A de C.V (HRAEV)','http://www.hraev.salud.gob.mx/ ','salud','','','','','','investigación','','HRAEV','hospital-regional-de-alta-especialidad-ciudad-victoria-“bicentenario-2010”-iii-servicios-sa-de-cv'),
(170,'Hospital Regional de Alta Especialidad de Oaxaca (HRAE/OAXACA)','http://www.hraeoaxaca.salud.gob.mx/ ','salud','','','','','','investigación','','HRAE/OAXACA','hospital-regional-de-alta-especialidad-de-oaxaca'),
(171,'Hospital Regional de Alta Especialidad de Yucatán (HRAEPY)','https://www.gob.mx/salud/hraepy/ ','salud','','','','','','investigación','','HRAEPY','hospital-regional-de-alta-especialidad-de-yucatan'),
(172,'Hospital Regional de Alta Especialidad del Bajío (HRAEB)','http://www.hraeb.salud.gob.mx/ ','salud','','','','','','investigación','','HRAEB','hospital-regional-de-alta-especialidad-del-bajio'),
(173,'I.I.I. Servicios S.A de C.V','http://www.iiiservicios.com/ ','','','','','','','investigación','','','iii-servicios-sa-de-cv'),
(174,'Impresora y Encuadernadora Progreso (IEPSA)','http://iepsa.gob.mx/portal/ ','','','','','','','investigación','','IEPSA','impresora-y-encuadernadora-progreso'),
(175,'INFOTEC Centro de Investigación e Innovación en Tecnologías de la Información y Comunicación (INFOTEC)','http://www.infotec.mx/ ','educación','','','','','','investigación','','INFOTEC','infotec-centro-de-investigacion-e-innovacion-en-tecnologias-de-la-informacion-y-comunicacion'),
(176,'Instalaciones Inmobiliarias para Industrias, S.A. de C.V. (IIISA)','http://www.pemex.com/organismos/Paginas/instalaciones_inmobiliarias.aspx ','','','','','','','investigación','','IIISA','instalaciones-inmobiliarias-para-industrias-sa-de-cv'),
(177,'Instituto de Administración y Avalúos de Bienes Nacionales (INDAABIN)','http://www.gob.mx/indaabin','','','','','','','investigación','','INDAABIN','instituto-de-administracion-y-avaluos-de-bienes-nacionales'),
(178,'Instituto de Ecología (INECOL)','http://www.inecol.edu.mx/inecol/index.php/es/ ','','','','','','','investigación','','INECOL','instituto-de-ecologia'),
(179,'Instituto de Formación Ministerial, Policial y Pericial','https://www.gob.mx/pgr/videos/conoce-el-instituto-de-formacion-ministerial-policial-y-pericial-de-la-pgr ','','','','','','','investigación','','','instituto-de-formacion-ministerial-policial-y-pericial'),
(180,'Instituto de Investigaciones Dr. José María Luis Mora (Instituto Mora)','https://www.institutomora.edu.mx/Inicio.html ','','','','','','','investigación','','Instituto Mora','instituto-de-investigaciones-dr-jose-maria-luis-mora'),
(181,'Instituto de los Mexicanos en el Exterior (IME)','https://www.gob.mx/ime ','','','','','','','investigación','','IME','instituto-de-los-mexicanos-en-el-exterior'),
(182,'Instituto de Seguridad Social para las Fuerzas Armadas Mexicanas (ISSFAM)','https://www.gob.mx/issfam ','','','','','','','investigación','','ISSFAM','instituto-de-seguridad-social-para-las-fuerzas-armadas-mexicanas'),
(183,'Instituto de Seguridad y Servicios Sociales de los Trabajadores del Estado (ISSSTE)','http://www.gob.mx/issste ','','','','','','','investigación','','ISSSTE','instituto-de-seguridad-y-servicios-sociales-de-los-trabajadores-del-estado'),
(184,'Instituto del Fondo Nacional de la Vivienda para los Trabajadores (INFONAVIT)','http://portal.infonavit.org.mx/wps/wcm/connect/infonavit/inicio ','','','','','','','investigación','','INFONAVIT','instituto-del-fondo-nacional-de-la-vivienda-para-los-trabajadores'),
(185,'Instituto del Fondo Nacional para el Consumo de los Trabajadores (INFONACOT)','http://www.fonacot.gob.mx/Paginas/default.aspx ','','','','','','','investigación','','INFONACOT','instituto-del-fondo-nacional-para-el-consumo-de-los-trabajadores'),
(186,'Instituto Matías Romero (IMR)','https://www.gob.mx/imr ','','','','','','','investigación','','IMR','instituto-matias-romero'),
(187,'Instituto Mexicano de Cinematografía (IMCINE)','http://www.imcine.gob.mx/ ','','','','','','','investigación','','IMCINE','instituto-mexicano-de-cinematografia'),
(188,'Instituto Mexicano de la Juventud (IMJUVE)','http://www.gob.mx/imjuve ','','','','','','','investigación','','IMJUVE','instituto-mexicano-de-la-juventud'),
(189,'Instituto Mexicano de la Propiedad Industrial (IMPI)','http://www.gob.mx/impi ','','','','','','','investigación','','IMPI','instituto-mexicano-de-la-propiedad-industrial'),
(190,'Instituto Mexicano de la Radio (IMER)','http://www.imer.mx/ ','','','','','','','investigación','','IMER','instituto-mexicano-de-la-radio'),
(191,'Instituto Mexicano de Tecnología del Agua (IMTA)','https://www.gob.mx/imta ','','','','','','','investigación','','IMTA','instituto-mexicano-de-tecnologia-del-agua'),
(192,'Instituto Mexicano del Petróleo (IMP)','https://www.gob.mx/imp ','','','','','','','investigación','','IMP','instituto-mexicano-del-petroleo'),
(193,'Instituto Mexicano del Seguro Social (IMSS)','http://www.imss.gob.mx/ ','','','','','','','investigación','','IMSS','instituto-mexicano-del-seguro-social'),
(194,'Instituto Mexicano del Transporte (IMT)','https://www.gob.mx/imt ','','','','','','','investigación','','IMT','instituto-mexicano-del-transporte'),
(195,'Instituto Nacional de Administración Pública, A.C. (INAP)','http://www.inap.mx/portal/ ','','','','','','','investigación','','INAP','instituto-nacional-de-administracion-publica-ac'),
(196,'Instituto Nacional de Antropología e Historia (INAH)','http://www.inah.gob.mx/ ','','','','','','','investigación','','INAH','instituto-nacional-de-antropologia-e-historia'),
(197,'Instituto Nacional de Astrofísica, Óptica y Electrónica (INAOEP)','http://www-optica.inaoep.mx/ ','','','','','','','investigación','','INAOEP','instituto-nacional-de-astrofisica-optica-y-electronica'),
(198,'Instituto Nacional de Bellas Artes y Literatura (INBA)','https://www.inba.gob.mx/ ','','','','','','','investigación','','INBA','instituto-nacional-de-bellas-artes-y-literatura'),
(199,'Instituto Nacional de Cancerología (INCAN)','http://www.incan.salud.gob.mx/ ','','','','','','','investigación','','INCAN','instituto-nacional-de-cancerologia'),
(200,'Instituto Nacional de Cardiología Ignacio Chávez (INCICH)','https://www.cardiologia.org.mx/ ','','','','','','','investigación','','INCICH','instituto-nacional-de-cardiologia-ignacio-chavez'),
(201,'Instituto Nacional de Ciencias Médicas y Nutrición Salvador Zubirán (INNSZ)','https://www.incmnsz.mx/opencms/index.html ','','','','','','','investigación','','INNSZ','instituto-nacional-de-ciencias-medicas-y-nutricion-salvador-zubiran'),
(202,'Instituto Nacional de Ciencias Penales (INACIPE)','http://www.inacipe.gob.mx/ ','','','','','','','investigación','','INACIPE','instituto-nacional-de-ciencias-penales'),
(203,'Instituto Nacional de Desarrollo Social (INDESOL)','https://www.gob.mx/indesol ','','','','','','','investigación','','INDESOL','instituto-nacional-de-desarrollo-social'),
(204,'Instituto Nacional de Ecología y Cambio Climático (INECC)','https://www.gob.mx/inecc ','','','','','','','investigación','','INECC','instituto-nacional-de-ecologia-y-cambio-climatico'),
(205,'Instituto Nacional de Electricidad y Energías Limpias (INEEL)','https://www.gob.mx/ineel ','','','','','','','investigación','','INEEL','instituto-nacional-de-electricidad-y-energias-limpias'),
(206,'Instituto Nacional de Enfermedades Respiratorias Ismael Cosío Villegas (INER)','http://www.iner.salud.gob.mx/ ','','','','','','','investigación','','INER','instituto-nacional-de-enfermedades-respiratorias-ismael-cosio-villegas'),
(207,'Instituto Nacional de Estudios Históricos de las Revoluciones de México (INEHRM)','http://inehrm.gob.mx/ ','','','','','','','investigación','','INEHRM','instituto-nacional-de-estudios-historicos-de-las-revoluciones-de-mexico'),
(208,'Instituto Nacional de Geriatría (INGER)','http://www.geriatria.salud.gob.mx/ ','','','','','','','investigación','','INGER','instituto-nacional-de-geriatria'),
(209,'Instituto Nacional de Investigaciones Forestales, Agrícolas y Pecuarias (INIFAP)','https://www.gob.mx/inifap ','','','','','','','investigación','','INIFAP','instituto-nacional-de-investigaciones-forestales-agricolas-y-pecuarias'),
(210,'Instituto Nacional de Investigaciones Nucleares (ININ)','https://www.gob.mx/inin ','','','','','','','investigación','','ININ','instituto-nacional-de-investigaciones-nucleares'),
(211,'Instituto Nacional de la Economía Social (INAES)','https://www.gob.mx/inaes ','','','','','','','investigación','','INAES','instituto-nacional-de-la-economia-social'),
(212,'Instituto Nacional de la Infraestructura Física Educativa (INIFED)','http://www.gob.mx/inifed ','','','','','','','investigación','','INIFED','instituto-nacional-de-la-infraestructura-fisica-educativa'),
(213,'Instituto Nacional de las Mujeres (INMUJERES)','http://www.gob.mx/inmujeres ','','','','','','','investigación','','INMUJERES','instituto-nacional-de-las-mujeres'),
(214,'Instituto Nacional de las Personas Adultas Mayores (INAPAM)','https://www.gob.mx/inapam ','','','','','','','investigación','','INAPAM','instituto-nacional-de-las-personas-adultas-mayores'),
(215,'Instituto Nacional de Lenguas Indígenas (INALI)','http://www.inali.gob.mx/ ','','','','','','','investigación','','INALI','instituto-nacional-de-lenguas-indigenas'),
(216,'Instituto Nacional de Medicina Genómica (INMEGEN)','http://www.inmegen.gob.mx/ ','','','','','','','investigación','','INMEGEN','instituto-nacional-de-medicina-genomica'),
(217,'Instituto Nacional de Migración (INM)','http://www.gob.mx/inm ','','','','','','','investigación','','INM','instituto-nacional-de-migracion'),
(218,'Instituto Nacional de Neurología y Neurocirugía Manuel Velasco Suárez (INNN)','https://www.gob.mx/salud/innn ','','','','','','','investigación','','INNN','instituto-nacional-de-neurologia-y-neurocirugia-manuel-velasco-suarez'),
(219,'Instituto Nacional de Pediatría (INP)','http://www.pediatria.gob.mx/ ','','','','','','','investigación','','INP','instituto-nacional-de-pediatria'),
(220,'Instituto Nacional de Perinatología (INPER)','https://www.gob.mx/salud/inper ','','','','','','','investigación','','INPER','instituto-nacional-de-perinatologia'),
(221,'Instituto Nacional de Pesca (INAPESCA)','https://www.gob.mx/inapesca/ ','','','','','','','investigación','','INAPESCA','instituto-nacional-de-pesca'),
(222,'Instituto Nacional de Psiquiatría Ramón de la Fuente Muñiz (INPRF)','http://inprf.gob.mx/ ','','','','','','','investigación','','INPRF','instituto-nacional-de-psiquiatria-ramon-de-la-fuente-muñiz'),
(223,'Instituto Nacional de Pueblos Indígenas (INPI)','http://www.gob.mx/inpi ','','','','','','','investigación','','INPI','instituto-nacional-de-pueblos-indigenas'),
(224,'Instituto Nacional de Rehabilitación (INR)','http://www.inr.gob.mx/ ','','','','','','','investigación','','INR','instituto-nacional-de-rehabilitacion'),
(225,'Instituto Nacional de Salud Pública (INSP)','http://www.insp.mx/ ','','','','','','','investigación','','INSP','instituto-nacional-de-salud-publica'),
(226,'Instituto Nacional de Transparencia, Acceso a la Información y Protección de Datos Personales (INAI)','http://inicio.ifai.org.mx/SitePages/ifai.aspx ','','','','','','','investigación','','INAI','instituto-nacional-de-transparencia-acceso-a-la-informacion-y-proteccion-de-datos-personales'),
(227,'Instituto Nacional del Derecho de Autor (INDAUTOR)','http://indautor.gob.mx/ ','','','','','','','investigación','','INDAUTOR','instituto-nacional-del-derecho-de-autor'),
(228,'Instituto Nacional del Emprendedor (INADEM)','https://www.inadem.gob.mx/ ','','','','','','','investigación','','INADEM','instituto-nacional-del-emprendedor'),
(229,'Instituto Nacional para el Desarrollo de Capacidades del Sector Rural (INCA Rural)','https://www.gob.mx/incarural ','','','','','','','investigación','','INCA Rural','instituto-nacional-para-el-desarrollo-de-capacidades-del-sector-rural'),
(230,'Instituto Nacional para el Federalismo y el Desarrollo Municipal (INAFED)','https://www.gob.mx/inafed ','','','','','','','investigación','','INAFED','instituto-nacional-para-el-federalismo-y-el-desarrollo-municipal'),
(231,'Instituto Nacional para la Educación de Adultos (INEA)','https://www.gob.mx/inea/ ','educación','','','','','','investigación','','INEA','instituto-nacional-para-la-educacion-de-adultos'),
(232,'Instituto para el Desarrollo Técnico de las Haciendas Públicas (INDETEC)','http://www.indetec.gob.mx/ ','','','','','','','investigación','','INDETEC','instituto-para-el-desarrollo-tecnico-de-las-haciendas-publicas'),
(233,'Instituto para la Protección al Ahorro Bancario (IPAB)','http://www.gob.mx/ipab ','','','','','','','investigación','','IPAB','instituto-para-la-proteccion-al-ahorro-bancario'),
(234,'Instituto Politécnico Nacional (IPN)','http://www.ipn.mx/ ','educación','','','','','','investigación','','IPN','instituto-politecnico-nacional'),
(235,'Instituto Potosino de Investigación Científica y Tecnológica (IPICYT)','http://ipicyt.edu.mx/ ','educación','','','','','','investigación','','IPICYT','instituto-potosino-de-investigacion-cientifica-y-tecnologica'),
(236,'Junta Federal de Conciliación y Arbitraje (JFCA)','http://www.gob.mx/jfca ','','','','','','','investigación','','JFCA','junta-federal-de-conciliacion-y-arbitraje'),
(237,'Laboratorio de Biológicos y Reactivos de México (BIRMEX)','http://www.birmex.gob.mx/ ','','','','','','','investigación','','BIRMEX','laboratorio-de-biologicos-y-reactivos-de-mexico'),
(238,'LICONSA','http://www.gob.mx/liconsa ','','','','','','','investigación','','','liconsa'),
(239,'Lotería Nacional para la Asistencia Pública (LOTENAL)','http://www.gob.mx/lotenal ','','','','','','','investigación','','LOTENAL','loteria-nacional-para-la-asistencia-publica'),
(240,'MEJOREDU','https://www.gob.mx/mejoredu ','','','','','','','investigación','','','mejoredu'),
(241,'Mexico Digital','http://www.gob.mx/mexicodigital ','','','','','','','investigación','','','mexico-digital'),
(242,'Nacional Financiera (NAFIN)','http://www.gob.mx/nafin ','','','','','','','investigación','','NAFIN','nacional-financiera'),
(243,'Notimex, Agencia de Noticias del Estado (NOTIMEX)','http://www.notimex.gob.mx/ ','','','','','','','investigación','','NOTIMEX','notimex-agencia-de-noticias-del-estado'),
(244,'Órgano Administrativo Desconcentrado de Prevención y Readaptación Social (OADPRS)','https://www.gob.mx/prevencionyreadaptacion ','','','','','','','investigación','','OADPRS','organo-administrativo-desconcentrado-de-prevencion-y-readaptacion-social'),
(245,'P.M.I. Comercio Internacional, S.A. de C.V. (PMI)','http://www.pmi.com.mx/Paginas/Inicio.aspx ','','','','','','','investigación','','PMI','pmi-comercio-internacional-sa-de-cv'),
(246,'Patronato de Obras e Instalaciones del Instituto Politécnico Nacional (POI IPN)','http://www.poi.ipn.mx/Paginas/Inicio.aspx ','','','','','','','investigación','','POI IPN','patronato-de-obras-e-instalaciones-del-instituto-politecnico-nacional'),
(247,'Petróleos Mexicanos (PEMEX)','http://www.pemex.com/Paginas/default.aspx ','','','','','','','investigación','','PEMEX','petroleos-mexicanos'),
(248,'Petróleos Mexicanos Exploración y Producción (PEMEX Exploración y Producción)','http://www.pep.pemex.com/Paginas/default.aspx ','','','','','','','investigación','','PEMEX Exploración y Producción','petroleos-mexicanos-exploracion-y-produccion'),
(249,'Petróleos Mexicanos Gas y Petroquímica Básica (PEMEX Gas y Petroquímica Básica)','http://www.gas.pemex.com.mx/portalpublico/ ','','','','','','','investigación','','PEMEX Gas y Petroquímica Básica','petroleos-mexicanos-gas-y-petroquimica-basica'),
(250,'Petróleos Mexicanos Petroquímica (PEMEX Petroquímica)','http://www.ptq.pemex.com.mx/Paginas/default.aspx ','','','','','','','investigación','','PEMEX Petroquímica','petroleos-mexicanos-petroquimica'),
(251,'Petróleos Mexicanos Refinación (PEMEX Refinación)','https://www.comercialrefinacion.pemex.com/portal/ ','','','','','','','investigación','','PEMEX Refinación','petroleos-mexicanos-refinacion'),
(252,'Policía Federal (PF)','http://www.gob.mx/policiafederal ','','','','','','','investigación','','PF','policia-federal'),
(253,'Presidencia de la República (PRESIDENCIA)','http://www.gob.mx/presidencia ','','','','','','','investigación','','PRESIDENCIA','presidencia-de-la-republica'),
(254,'Procuraduría Agraria (PA)','https://www.gob.mx/pa ','','','','','','','investigación','','PA','procuraduria-agraria'),
(255,'Procuraduría de la Defensa del Contribuyente (PRODECON)','http://www.prodecon.gob.mx/ ','','','','','','','investigación','','PRODECON','procuraduria-de-la-defensa-del-contribuyente'),
(256,'Procuraduría Federal de la Defensa del Trabajo (PROFEDET)','https://www.gob.mx/profedet ','','','','','','','investigación','','PROFEDET','procuraduria-federal-de-la-defensa-del-trabajo'),
(257,'Procuraduría Federal de Protección al Ambiente (PROFEPA)','https://www.gob.mx/profepa ','','','','','','','investigación','','PROFEPA','procuraduria-federal-de-proteccion-al-ambiente'),
(258,'Procuraduría Federal del Consumidor (PROFECO)','http://www.gob.mx/profeco ','','','','','','','investigación','','PROFECO','procuraduria-federal-del-consumidor'),
(259,'Procuraduría General de la República (PGR)','http://www.gob.mx/pgr ','','','','','','','investigación','','PGR','procuraduria-general-de-la-republica'),
(260,'Productora Nacional de Biológicos Veterinarios (PRONABIVE)','https://www.gob.mx/pronabive ','','','','','','','investigación','','PRONABIVE','productora-nacional-de-biologicos-veterinarios'),
(261,'Programa Nacional de Financiamiento a Microempresarios (PRONAFIM)','http://www.gob.mx/pronafim ','','','','','','','investigación','','PRONAFIM','programa-nacional-de-financiamiento-a-microempresarios'),
(262,'Programa para Democratizar la Productivdad','http://www.gob.mx/productividad ','','','','','','','investigación','','','programa-para-democratizar-la-productivdad'),
(263,'ProMéxico','https://www.gob.mx/promexico ','','','','','','','investigación','','','promexico'),
(264,'Pronósticos para la Asistencia Pública (Pronósticos)','http://www.gob.mx/pronosticos ','','','','','','','investigación','','Pronósticos','pronosticos-para-la-asistencia-publica'),
(265,'Prospera Programa de Inclusión Social (PROSPERA)','http://www.gob.mx/prospera ','','','','','','','investigación','','PROSPERA','prospera-programa-de-inclusion-social'),
(266,'Radio Educación (E Radio)','http://www.e-radio.edu.mx/Inicio ','','','','','','','investigación','','E Radio','radio-educacion'),
(267,'Registro Agrario Nacional (RAN)','http://www.gob.mx/ran ','','','','','','','investigación','','RAN','registro-agrario-nacional'),
(268,'Sección Mexicana de la Comisión Internacional de Límites y Aguas entre México y Estados Unidos','http://directorio.sre.gob.mx/index.php/oficinas-centrales/seccion-mexicana-de-la-comision-internacional-de-limites-y-aguas-entre-mexico-ee-uu ','','','','','','','investigación','','','seccion-mexicana-de-la-comision-internacional-de-limites-y-aguas-entre-mexico-y-estados-unidos'),
(269,'Secciones Mexicanas de las Comisiones Internacionales de Límites y Aguas entre México y Guatemala, y entre México y Belice','http://sre.gob.mx/seccion-de-mexicana-de-las-comisiones-internacionales-de-limites-y-aguas-entre-mexico-y-guatemala-y-entre-mexico-y-belice ','','','','','','','investigación','','','secciones-mexicanas-de-las-comisiones-internacionales-de-limites-y-aguas-entre-mexico-y-guatemala-y-entre-mexico-y-belice'),
(270,'Secretaría de Agricultura y Desarrollo Rural (AGRICULTURA)','http://www.gob.mx/sader ','','','','','','','investigación','','AGRICULTURA','secretaria-de-agricultura-y-desarrollo-rural'),
(271,'Secretaría de Bienestar (BIENESTAR)','http://www.gob.mx/bienestar ','','','','','','','investigación','','BIENESTAR','secretaria-de-bienestar'),
(272,'Secretaría de Comunicaciones y Transportes (SCT)','http://www.gob.mx/sct ','','','','','','','investigación','','SCT','secretaria-de-comunicaciones-y-transportes'),
(273,'Secretaría de Cultura (Cultura)','https://www.gob.mx/cultura ','','','','','','','investigación','','Cultura','secretaria-de-cultura'),
(274,'Secretaría de Desarrollo Agrario, Territorial y Urbano (SEDATU)','http://www.gob.mx/sedatu ','','','','','','','investigación','','SEDATU','secretaria-de-desarrollo-agrario-territorial-y-urbano'),
(275,'Secretaría de Economía (SE)','http://www.gob.mx/se/ ','','','','','','','investigación','','SE','secretaria-de-economia'),
(276,'Secretaría de Educación Pública (SEP)','https://www.gob.mx/sep ','','','','','','','investigación','','SEP','secretaria-de-educacion-publica'),
(277,'Secretaría de Energía (SENER)','http://www.gob.mx/sener ','','','','','','','investigación','','SENER','secretaria-de-energia'),
(278,'Secretaría de Gobernación (SEGOB)','http://www.gob.mx/segob ','','','','','','','investigación','','SEGOB','secretaria-de-gobernacion'),
(279,'Secretaría de Hacienda y Crédito Público (SHCP)','http://www.gob.mx/hacienda ','','','','','','','investigación','','SHCP','secretaria-de-hacienda-y-credito-publico'),
(280,'Secretaría de la Defensa Nacional (SEDENA)','http://www.gob.mx/sedena ','','','','','','','investigación','','SEDENA','secretaria-de-la-defensa-nacional'),
(281,'Secretaría de la Función Pública (SFP)','http://www.gob.mx/sfp ','','','','','','','investigación','','SFP','secretaria-de-la-funcion-publica'),
(282,'Secretaría de Marina (SEMAR)','http://www.gob.mx/semar ','','','','','','','investigación','','SEMAR','secretaria-de-marina'),
(283,'Secretaría de Medio Ambiente y Recursos Naturales (SEMARNAT)','http://www.gob.mx/semarnat ','','','','','','','investigación','','SEMARNAT','secretaria-de-medio-ambiente-y-recursos-naturales'),
(284,'Secretaría de Relaciones Exteriores (SRE)','http://www.gob.mx/sre ','','','','','','','investigación','','SRE','secretaria-de-relaciones-exteriores'),
(285,'Secretaría de Salud (SALUD)','http://www.gob.mx/salud ','','','','','','','investigación','','SALUD','secretaria-de-salud'),
(286,'Secretaría de Turismo (SECTUR)','http://www.gob.mx/sectur/ ','','','','','','','investigación','','SECTUR','secretaria-de-turismo'),
(287,'Secretaría del Trabajo y Previsión Social (STPS)','http://www.gob.mx/stps ','','','','','','','investigación','','STPS','secretaria-del-trabajo-y-prevision-social'),
(288,'Secretaría General del Consejo Nacional de Población (CONAPO)','http://www.gob.mx/conapo ','','','','','','','investigación','','CONAPO','secretaria-general-del-consejo-nacional-de-poblacion'),
(289,'Secretaría Técnica de la Comisión Calificadora de Publicaciones y Revistas Ilustradas (STCCPRI)','http://www.stccpri.gob.mx/ ','','','','','','','investigación','','STCCPRI','secretaria-tecnica-de-la-comision-calificadora-de-publicaciones-y-revistas-ilustradas'),
(290,'Secretaría Técnica del Consejo de Coordinación para la Implementación del Sistema de Justicia Penal (SETEC)','http://setecc.egobierno.gob.mx/ ','','','','','','','investigación','','SETEC','secretaria-tecnica-del-consejo-de-coordinacion-para-la-implementacion-del-sistema-de-justicia-penal'),
(291,'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública (Secretariado Ejecutivo)','https://www.gob.mx/sesnsp ','','','','','','','investigación','','Secretariado Ejecutivo','secretariado-ejecutivo-del-sistema-nacional-de-seguridad-publica'),
(292,'Seguros de Crédito a la Vivienda SHF, S.A. de C.V. (SCV SHF)','https://www.gob.mx/shf ','','','','','','','investigación','','SCV SHF','seguros-de-credito-a-la-vivienda-shf-sa-de-cv'),
(293,'Servicio de Administración Tributaria (SAT)','https://www.gob.mx/sat ','','','','','','','investigación','','SAT','servicio-de-administracion-tributaria'),
(294,'Servicio de Administración y Enajenación de Bienes (SAE)','http://www.gob.mx/sae ','','','','','','','investigación','','SAE','servicio-de-administracion-y-enajenacion-de-bienes'),
(295,'Servicio de Información Agroalimentaria y Pesquera (SIAP)','http://www.gob.mx/siap ','','','','','','','investigación','','SIAP','servicio-de-informacion-agroalimentaria-y-pesquera'),
(296,'Servicio de Protección Federal (SPF)','https://www.gob.mx/proteccionfederal ','','','','','','','investigación','','SPF','servicio-de-proteccion-federal'),
(297,'Servicio Geológico Mexicano (SGM)','https://www.gob.mx/sgm ','','','','','','','investigación','','SGM','servicio-geologico-mexicano'),
(298,'Servicio Nacional de Inspección y Certificación de Semillas (SNICS)','https://www.gob.mx/snics ','','','','','','','investigación','','SNICS','servicio-nacional-de-inspeccion-y-certificacion-de-semillas'),
(299,'Servicio Nacional de Sanidad, Inocuidad y Calidad Agroalimentaria (SENASICA)','http://www.gob.mx/senasica ','','','','','','','investigación','','SENASICA','servicio-nacional-de-sanidad-inocuidad-y-calidad-agroalimentaria'),
(300,'Servicio Postal Mexicano (SEPOMEX)','http://www.gob.mx/correosdemexico ','','','','','','','investigación','','SEPOMEX','servicio-postal-mexicano'),
(301,'Servicios a la Navegación en el Espacio Aéreo Mexicano (SENEAM)','https://www.gob.mx/seneam ','','','','','','','investigación','','SENEAM','servicios-a-la-navegacion-en-el-espacio-aereo-mexicano'),
(302,'Servicios Aeroportuarios de la Ciudad de México, S.A. de C.V. (SACM)','http://www.aicm.com.mx/ ','','','','','','','investigación','','SACM','servicios-aeroportuarios-de-la-ciudad-de-mexico-sa-de-cv'),
(303,'Servicios de Almacenamiento del Norte, S.A. (SERANOR) (en proceso de desincorporación)','https://www.sae.gob.mx/es/Paginas/default.aspx ','','','','','','','investigación','en proceso de desincorporación)','SERANOR','servicios-de-almacenamiento-del-norte-sa'),
(304,'Servicios de Atención Psiquiátrica (SAP)','https://www.gob.mx/salud/sap ','','','','','','','investigación','','SAP','servicios-de-atencion-psiquiatrica'),
(305,'Sistema Nacional para el Desarrollo Integral de la Familia (DIF)','https://www.gob.mx/difnacional ','','','','','','','investigación','','DIF','sistema-nacional-para-el-desarrollo-integral-de-la-familia'),
(306,'Sistema Público de Radiodifusión del Estado Mexicano (SPR)','http://www.spr.gob.mx/ ','','','','','','','investigación','','SPR','sistema-publico-de-radiodifusion-del-estado-mexicano'),
(307,'Sociedad Hipotecaria Federal, S.N.C. (SHF)','https://www.gob.mx/shf ','','','','','','','investigación','','SHF','sociedad-hipotecaria-federal-snc'),
(308,'SuperISSSTE','http://www.superissste.gob.mx/ ','','','','','','','investigación','','','superissste'),
(309,'Talleres Gráficos de México (TGM)','https://www.gob.mx/tgm ','','Jorge Acebedo Adabache','Subgerente de Servicios Generales','5557047400,','130','','investigación','se escucho abierto, hablar a principios de enero','TGM','talleres-graficos-de-mexico'),
(310,'Tecnológico Nacional de México (TecNM)','http://www.tecnm.mx/ ','','Haydee Alejandra Gomez Carpizo','','','','','investigación','','TecNM','tecnologico-nacional-de-mexico'),
(311,'Telecomunicaciones de México (Telecomm)','http://www.telecomm.gob.mx/ ','','','','','','','investigación','lo estoy viendo con esteban','Telecomm','telecomunicaciones-de-mexico'),
(312,'Televisión Metropolitana (Canal 22)','http://corporativo.canal22.org.mx/ ','','Ricardo Cardona Acosta','Subdirector general de Coordinador de archivo','','','','investigación','se envio mensaje por instagram','Canal 22','television-metropolitana'),
(313,'Tribunal Federal de Conciliación y Arbitraje (TFCA)','http://www.tfca.gob.mx/ ','','Marlen Suarez Villalobos','Unudad de archivo','5550629700,','15084','msuarezv@tfca.gob.mx','investigación','','TFCA','tribunal-federal-de-conciliacion-y-arbitraje'),
(314,'Tribunales Agrarios','http://www.tribunalesagrarios.gob.mx/index.php ','','','','','','','investigación','','','tribunales-agrarios'),
(315,'TURISSSTE','http://www.gob.mx/turissste/ ','','','','','','','investigación','sin información','','turissste'),
(316,'Universidad Abierta y a Distancia de México (UnADM)','https://www.unadmexico.mx/ ','educación','Isis Citlalli Gómez López','','55 3600-2511,5536002500','','isis.gomez@nube.unadmexico.mx','investigación','mande coreo al contacto pidiendole el contacto de archivo','UnADM','universidad-abierta-y-a-distancia-de-mexico'),
(317,'Universidad Naval','http://www.gob.mx/universidadnaval ','educación','','','','','','investigación','sin información','','universidad-naval'),
(318,'Universidad Pedagógica Nacional (UPN)','http://www.upn.mx/ ','educación','Yiseth Osorio Osorio','Titular de la unidad de transparencia ','','','','investigación','mande mensaje a trasnparencia para ver el contacto','UPN','universidad-pedagogica-nacional'),
(319,'XEIPN Canal Once','http://www.canalonce.mx/ ','educación','Armando Pérez Mora','Jefe del Departamento coordinación de archivos','5553561111;60101','','aperez@canalonce.ipn.mx','investigación','mencionan que todos susrecursos los obtienen del Poli','','xeipn-canal-once')
```
</details>

CodeIgniter is a PHP full-stack web framework that is light, fast, flexible and secure.
More information can be found at the [official site](https://codeigniter.com).

This repository holds the distributable version of the framework.
It has been built from the
[development repository](https://github.com/codeigniter4/CodeIgniter4).

More information about the plans for version 4 can be found in [CodeIgniter 4](https://forum.codeigniter.com/forumdisplay.php?fid=28) on the forums.

The user guide corresponding to the latest version of the framework can be found
[here](https://codeigniter4.github.io/userguide/).

## Important Change with index.php

`index.php` is no longer in the root of the project! It has been moved inside the *public* folder,
for better security and separation of components.

This means that you should configure your web server to "point" to your project's *public* folder, and
not to the project root. A better practice would be to configure a virtual host to point there. A poor practice would be to point your web server to the project root and expect to enter *public/...*, as the rest of your logic and the
framework are exposed.

**Please** read the user guide for a better explanation of how CI4 works!

## Repository Management

We use GitHub issues, in our main repository, to track **BUGS** and to track approved **DEVELOPMENT** work packages.
We use our [forum](http://forum.codeigniter.com) to provide SUPPORT and to discuss
FEATURE REQUESTS.

This repository is a "distribution" one, built by our release preparation script.
Problems with it can be raised on our forum, or as issues in the main repository.

## Contributing

We welcome contributions from the community.

Please read the [*Contributing to CodeIgniter*](https://github.com/codeigniter4/CodeIgniter4/blob/develop/CONTRIBUTING.md) section in the development repository.

## Server Requirements

PHP version 7.4 or higher is required, with the following extensions installed:

- [intl](http://php.net/manual/en/intl.requirements.php)
- [mbstring](http://php.net/manual/en/mbstring.installation.php)

> **Warning**
> The end of life date for PHP 7.4 was November 28, 2022. If you are
> still using PHP 7.4, you should upgrade immediately. The end of life date
> for PHP 8.0 will be November 26, 2023.

Additionally, make sure that the following extensions are enabled in your PHP:

- json (enabled by default - don't turn it off)
- [mysqlnd](http://php.net/manual/en/mysqlnd.install.php) if you plan to use MySQL
- [libcurl](http://php.net/manual/en/curl.requirements.php) if you plan to use the HTTP\CURLRequest library

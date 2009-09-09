<?php
/**
 * Content
 *
 * @copyright (C) 2007-2009, Jorn Wildt
 * @link http://www.elfisk.dk
 * @version $Id: common.php,v 1.4 2007/05/23 18:57:43 jornlind Exp $
 * @license See license.txt
 */

/**
 * translated by
 * @author Mateo Tibaquira [mateo]
 */
 
Loader::requireOnce('modules/content/pnlang/spa/common.php');

define('_CONTENT_ACTIVE', 'Activo');
define('_CONTENT_ADMINEDIT', 'Editar contenido');
define('_CONTENT_ADMINEXTENDEDLIST', 'Lista de p�ginas extendida (muestra los t�tulos de las p�ginas)');
define('_CONTENT_ADMINMAIN', 'Administraci�n de contenidos');
define('_CONTENT_ADMINMAININTRO', 'Bienvenido a tu administrador de contenidos. We have split the editing and administrative setup into separate systems. So please select from the list below or the menu above.');
define('_CONTENT_ADMINMAINLINK', 'Principal');
define('_CONTENT_ADMINPAGELIST', 'Lista de p�ginas completas (muestra las p�ginas completas)');
define('_CONTENT_ADMINSETTINGS', 'Configuraci�n');
define('_CONTENT_ADMINSETTINGSINTRO', 'Aqui es donde configuras varias partes del m�dulo de contenidos.');
define('_CONTENT_ADMINUPDATED', 'Actualizado');
define('_CONTENT_BBCODE', 'BBCode');
define('_CONTENT_BBCODE_BUTTONS', 'Botones');
define('_CONTENT_BBCODE_DESC', 'BBCode es una abreviaci�n de Bulletin Board Code, el lenguaje liviano usado para dar pormato a los mensajes usado en muchos foros. (<a href="http://es.wikipedia.org/wiki/Bbcode">Wikipedia</a>)<br /><a href="http://code.zikula.org/bbcode">Descargar</a>');
define('_CONTENT_CATEGORYLIST', 'Mostrar contenidos por categor�a');
define('_CONTENT_CONFIG', 'Configuraci�n');
define('_CONTENT_DEPENDENCIES', 'Dependencias del m�dulo');
define('_CONTENT_DEPENDENCIES_INTRO', 'Content includes an API that other modules can use to provide their content. Moreover some modules introduce extra functions to plugins delivered with Content.');
define('_CONTENT_INACTIVE', 'Inactivo');
define('_CONTENT_INSTALLED', 'Instalado');
define('_CONTENT_MODULE', 'M�dulo');
define('_CONTENT_PLUGIN', 'Plugin');
define('_CONTENT_SCRIBITE', 'Scribite');
define('_CONTENT_SCRIBITE_WYSIWYG', 'WYSIWYG');
define('_CONTENT_SCRIBITE_DESC', 'Editores Javascript WYSIWYG integrados por Scribite como Xinha, TinyMCE, FCKeditor, openWYSIWYG o NicEdit en Zikula.<br /><a href="http://code.zikula.org/scribite">Descargar</a>');
define('_CONTENT_SHORTURLSUFFIXLABEL', 'Sufijo para URLs cortas');
define('_CONTENT_SHORTURLSUFFIXLABELHELP', 'Extensi�n de archivo usada para URLs cortas (incluyendo el punto - por ejemplo ".htm"). Esto s�lo es usado si habilitas URLs cortas en el panel de administraci�n de Zikula.');
define('_CONTENT_STYLECLASSESLABEL', 'Estilo');
define('_CONTENT_STYLECLASSESLABELHELP', 'Una lista de clases CSS disponibles para los elementos de contenido. El usuario final puede seleccionar una clase para cada elemento en una p�gina - por ejemplo "nota" para un elemento con estilo de nota. Escribe un nombre de clase por l�nea. Por favor separa las clases CSS y nombres a mostrar con  | - ej. "nota | Memo".');
define('_CONTENT_UNINSTALLED', 'no instalado');
define('_CONTENT_VERSIONINGENABLE', 'Habilitar historial de versiones');

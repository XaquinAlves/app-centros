<?php

  namespace Com\Daw2\Core;

use Com\Daw2\Libraries\Mensaje;

abstract class BaseController
{
    protected View $view;

    public function __construct()
    {
        $this->view = new View(get_class($this));
    }

    /**
     * Devuelve los valores enviados en el cuerpo de una petición. Si recibe como CONTENT_TYPE = 'application/json' parsea el body como un json. En caso contrario asume formato var1=valor1&var2=valor2
     * Con esta función leemos sólo una vez la petición que recibimos ya que si la hemos leído con anterioridad, tendremos contenido en atributo bodyData y no será necesario reparsea la petición
     * @return array Devuelve un array clave=>valor con los parámetros recibidos en el cuerpo de la petición
     */
    public function getBodyData(): array
    {
        if (is_null($this->bodyData)) {
            $this->bodyData = $this->initBodyData();
        }
        return $this->bodyData;
    }

    /**
     * Parsea el contenido del body de petición. Usualmente con PUT, PATCH.
     * Si recibe como CONTENT_TYPE = 'application/json' parsea el body como un json. En caso contrario asume formato var1=valor1&var2=valor2
     * Almacena el contenido parseado en atributo privado para tenerlo accesible durante toda la vida de la clase
     * @return array Devuelve un array clave=>valor con los parámetros recibidos en el cuerpo de la petición
     */
    private function initBodyData(): array
    {
        $request = file_get_contents("php://input");
        if (!empty($request)) {
            $contentType = $_SERVER["CONTENT_TYPE"] ?? 'plain/text';

            if ($contentType === 'application/json') {
                $postVars = json_decode($request, true);
            } else {
                parse_str($request, $postVars);
            }
            return $postVars;
        } else {
            return array();
        }
    }
}

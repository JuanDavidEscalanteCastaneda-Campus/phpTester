# **Apache_Request_Headers**

------

![Abstract panoramic background with blue triangles - Vector 2129306 Vector  Art at Vecteezy](https://static.vecteezy.com/system/resources/previews/002/129/306/non_2x/abstract-panoramic-background-with-blue-triangles-vector.jpg)



------

## **Cabeceras\ de peticion**

- Connection

  El encabezado general **`Connection`** controla si la conexión de red permanece abierta después de que finaliza la transacción actual. Si el valor enviado es **`keep-alive`**, la conexión es persistente y no cerrada, lo que permite realizar solicitudes posteriores al mismo servidor.

  ```php
  echo($_HEADERS["Connection"]);
  ```

  

- Content-Length

  El encabezado de entidad **`Content-Length`** indica el tamaño de la entidad-cuerpo, en bytes, enviado al destinatario.

  ```PHP
  echo($_HEADERS["Content-Length"]);
  ```

  

- sec-ch-ua

  El Sec-CH-UA`** user agent client hint proporciona la marca del agente de usuario y la información de versión significativa.

  El encabezado **`Sec-CH-UA`** proporciona la marca y la versión significativa de cada marca asociada con el navegador en una lista separada por comas.

  Una marca es un nombre comercial para el agente de usuario como: Chromium, Opera, Google Chrome, Microsoft Edge, Firefox y Safari.

  ```PHP
    echo($_HEADERS["sec-ch-ua"]);
  ```

  

- sec-ch-ua-platform

  El **`Sec-CH-UA-Platform`** user agent client hint proporciona la plataforma o el sistema operativo en el que se ejecuta el agente de usuario. Por ejemplo: 'Windows' o 'Android'.

  Este encabezado porporciona Una de las siguientes cadenas: 'Android', 'Chrome OS', 'Chromium OS', 'iOS', 'Linux', 'macOS', 'Windows' o 'Unknown'..

  ```PHP
  echo($_HEADERS["sec-ch-ua-platform"]);
  ```

  

- sec-ch-ua-mobile

  El **`Sec-CH-UA-Mobile`** user agent client hint indica si el navegador está en un dispositivo móvil. También puede ser utilizado por un navegador de escritorio para indicar una preferencia por una experiencia de usuario 'móvil'.

  ?1 indica que el agente de usuario prefiere una experiencia móvil (verdadero). ?0 indica que el agente de usuario no prefiere una experiencia móvil (falso).

  ```PHP
  echo($_HEADERS["sec-ch-ua-mobile"]);
  ```

  

- User-Agent

  El **`User-Agent`** es una cadena característica que le permite a los servidores y servicios de red identificar la aplicación, sistema operativo, compañía, y/o la versión del [user agent (en-US] que hace la petición.

  ```PHP
   echo($_HEADERS["User-Agent"]);
  ```

  

- content-type

- El **`User-Agent`** dice al cliente que tipo de contenido será retornado. Los navegadores rastrearán `MIME` en algunos casos y no seguirán necesariamente el valor de este encabezado; para evitar este comportamiento, el encabezado [`X-Content-Type-Options`](https://developer.mozilla.org/es/docs/Web/HTTP/Headers/X-Content-Type-Options) se puede establecer en `nosniff`.

  ```PHP
  echo($_HEADERS["content-type"]);
  ```

  

- Accept

- **Host**

  El encabezado de solicitud **`Host`** especifica el nombre de dominio del servidor (para hosting virtual), y (opcionalmente) el número de puerto TCP en el que el servidor esta escuchando.

  ```php
  echo($_HEADERS["Host"]);
  ```

  

- Origin

  La cabecera de petición **`Origin`** indica de dónde se origina una búsqueda. No incluye ninguna información de ruta, sino sólo el nombre del servidor.

  ```PHP
  echo($_HEADERS["Origin"]);
  ```

  

- Sec-Fetch-Site

  La cabecera de petición **`Origin`** indica de dónde se origina una búsqueda. No incluye ninguna información de ruta, sino sólo el nombre del servidor.

  **Directivas**

  ```
  Sec-Fetch-Site: cross-site
  Sec-Fetch-Site: same-origin
  Sec-Fetch-Site: same-site
  Sec-Fetch-Site: none
  ```

  **Example**

  ```php
  echo($_HEADERS["Sec-Fetch-site"]);
  ```

  

- Sec-Fetch-Mode

  The **`Sec-Fetch-Mode`** [fetch metadata request header](https://developer.mozilla.org/en-US/docs/Glossary/Fetch_metadata_request_header) indica el modo de la solicitud.

  **Directivas**

  ```
  Sec-Fetch-Mode: cors
  Sec-Fetch-Mode: navigate
  Sec-Fetch-Mode: no-cors
  Sec-Fetch-Mode: same-origin
  Sec-Fetch-Mode: websocket
  ```

  **Example**

  ```php
  echo($_HEADERS["Sec-Fetch-Mode"]);
  ```

  

- Sec-Fetch-Dest

  indica el destino de la solicitud. Ese es el iniciador de la solicitud de recuperación original, que es dónde (y cómo) se utilizarán los datos obtenidos.

  **Directivas**

  ```
  Sec-Fetch-Dest: audio
  Sec-Fetch-Dest: audioworklet
  Sec-Fetch-Dest: document
  Sec-Fetch-Dest: embed
  Sec-Fetch-Dest: empty
  Sec-Fetch-Dest: font
  Sec-Fetch-Dest: frame
  Sec-Fetch-Dest: iframe
  Sec-Fetch-Dest: image
  Sec-Fetch-Dest: manifest
  Sec-Fetch-Dest: object
  Sec-Fetch-Dest: paintworklet
  Sec-Fetch-Dest: report
  Sec-Fetch-Dest: script
  Sec-Fetch-Dest: serviceworker
  Sec-Fetch-Dest: sharedworker
  Sec-Fetch-Dest: style
  Sec-Fetch-Dest: track
  Sec-Fetch-Dest: video
  Sec-Fetch-Dest: worker
  Sec-Fetch-Dest: xslt
  ```

  **Example**

  ```php
  echo($_HEADERS["Sec-Fetch-Dest"]);
  ```

  

- Referer

  La cabecera de solicitud **`Referer`** (‘referente’) contiene la dirección de la página web anterior de la que provenía el enlace a la página actual que se siguió. La cabecera `Referer` permite a los servidores identificar de dónde los visitan las personas y pueden emplear estos datos para realizar análisis, registros o un almacenamiento en antememoria optimizado, por mencionar algunos ejemplos.

  ```php
      echo($_HEADERS["Referer"]); 
  ```

  

- Cookie

  El encabezado **`Cookie`** de una solicitud HTTP contiene [cookies HTTP](https://developer.mozilla.org/es/docs/Web/HTTP/Cookies) almacenadas y enviadas previamente por el servidor con el encabezado (**`header`**).

  ```
  echo(Cookie: PHPSESSID=298zf09hf012fh2; csrftoken=u32t4o3tb3gg43; _gat=1;)
  ```

  

------

## 






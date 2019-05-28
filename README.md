
<p align='center'>
  <img src='img/logo_htj.png' height='300' align='center'>
</p>

<p align='center'>
  <img src='img/kodemia_black.png' height='100' align='center'>  
  &

  <img src='img/logo_ct_white.png' height='100' align='center'> 
</p>

# Convocatoria: Back-End Developer PHP

### **Si buscas retos y no sólo un trabajo esto es para ti**

Participa en la nueva convocatoria para el siguiente **Hack de Job by Kodemia y Conecta Turismo**.

Si consideras que eres un master developer Sr en PHP te invitamos a participar en esta nueva edición de Hack de Job para una de las empresas que está creando innovación y tecnología en uno de los sectores con más crecimiento en México. Conecta Turismo es una empresa española experta en tecnología y asesoría turística que ha llegado a México con la idea de sumar a su equipo talento mexicano  y se encuentran en busca de **Devs PHP**.

Lo mejor de este evento es que se lleva a cabo en un solo día, podrás platicar directamente con los líderes y fundadores de la empresa para conocer a detalle las tecnologías con que trabajan su visión de crecimiento. 

Hack the job se llevará a cabo en nuestras oficinas en la colonia Roma el día sábado 1o. De Junio donde aplicaras un reto del cual presentarás el resultado como lo harías en un hackathon.

#### Se premiará a los tres primeros lugares:

**1er lugar:** Además de tener la oportunidad de incorporarte a laborar a Conecta Turismo, recibiendo una oferta el mismo día del evento, también ganarás 1 Viaje (vuelo+ hotel+traslados+desayuno) para 2 personas a Cancún del 9 al 12 de septiembre.

**2o. Lugar:** Tour para 2 personas a San Miguel de Allende + Tranvia para  el 21 de Julio.

**3er. lugar:** Tour para 2 personas a Villa del Carbón para el 21 Julio.

Además habrá donas, pizza, café y cervezas 
¡Nunca habías participado vivido un proceso de selección así!

####La experiencia que necesitas para aplicar a este reto es:

- PHP v7
- Apache
- Nginx

#### Tus habilidades soft:

- Lógica de programación
- Capacidad para trabajar en un equipo multidisciplinario 
- Debes ser autodidacta
- Tener Ownership que es el sentido de pertenencia hacia un proyecto
- Adaptabilidad
- Compromiso 
- Análisis de problemas
- Toma de decisiones 
- Planeación y organización 
- Adaptabilidad
- Comunicación oportuna y efectiva
- Seguimiento y control

> <h2 align='center'> ¡Buscamos talento, <b>NO títulos</b>! </h2>

Tu lugar de trabajo será un lugar en donde surgen las ideas y se colabora con equipos multidisciplinarios en todo momento COW Roma El horario es de 9:00 a 6:00pm pero flexibles ya que lo importante es cumplir con los objetivos.

La oferta económica cuenta con una base de $35, 000.00 MXN mensuales netos y se te hara una oferta final acorde a tus conocimientos y experiencia  además de las prestaciones de ley. 

### ¿Que tengo que hacer?

1. Resuelve el Reto para participar en el evento
2. Guarda los resultados en tu repositorio preferido
3. Envía un mail a Carolina Gayosso ( carolina@kodemia.mx ) con:
    - URL de tu repositorio
    - Curriculum Vitae
    - Teléfono de contacto
    - Cuéntanos un poco por qué te gustaría pertenecer al equipo de ConectaTurismo
4. Espera el mail o llamada de Carolina Gayosso donde te dará todas las bases y detalles para presentarte en Hack The Job el 1 de Junio

---

## El Reto

Ayudarás a nuestros clientes a ahorrar tiempo construyendo un programa que convierta estructuras XML (response.xml y response2.xml) a una estructura JSON (return.json). 

Te dejamos unos ejemplos y descripción de los fragmentos en los XML y podrás descargar los archivos completos en este repositorio.

#### Estructura XML 1

Esta es la descripción de toda la información alojada en la estructura XML en el archivo response.xml, deberás entender la estructura y generar el código PHP para convertir estos resultados a estructura JSON (return.json)

```xml
<air:FlightDetails 
  Key="wQe7wMkB0BKA0GeUkLAAAA==" 
  Origin="MAD" 
  Destination="BOG" 
  DepartureTime="2018-09-12T09:05:00.000+02:00" 
  ArrivalTime="2018-09-12T12:12:00.000-05:00" 
  FlightTime="607" 
  TravelTime="1035" 
  Equipment="788" 
  OriginTerminal="4S" 
  DestinationTerminal="1" 
/>
```
Contiene información detallada de un segmento: Aeropuerto de origen, aeropuerto de destino, Fecha y hora de salida, Fecha y hora de llegada, duración del segmento en minutos, Aeronave Terminal de origen y Terminal de destino.


```xml
<air:AirSegment 
  Key="wQe7wMkB0BKAzGeUkLAAAA==" 
  Group="0" 
  Carrier="AV" 
  FlightNumber="27" 
  Origin="MAD" 
  Destination="BOG" 
  DepartureTime="2018-09-12T09:05:00.000+02:00" 
  ArrivalTime="2018-09-12T12:12:00.000-05:00" 
  FlightTime="607" 
  Distance="4991" 
  ETicketability="Yes" 
  Equipment="788" 
  ChangeOfPlane="false" 
  ParticipantLevel="Secure Sell" 
  LinkAvailability="true" 
  PolledAvailabilityOption="Cached status used. Polled avail exists" 
  OptionalServicesIndicator="false" 
  AvailabilitySource="P" 
  AvailabilityDisplayType="Fare Shop/Optimal Shop"
>
  <air:CodeshareInfo 
    OperatingCarrier="UX" 
    OperatingFlightNumber="63"
  >
    AIR EUROPA
  </air:CodeshareInfo>
  <air:AirAvailInfo ProviderCode="1G" />
  <air:FlightDetailsRef Key="wQe7wMkB0BKA0GeUkLAAAA==" />
</air:AirSegment>

```
Contiene información de un segmento: Aerolínea, numero de vuelo, aeropuerto de origen, aeropuerto de destinos, fecha y hora de salida, fecha y hora de llegada, duración del vuelo en minutos, aeronave, Aerolínea operadora y numero de vuelo para la aerolínea operadora, Key relacional con FlightDetails.


```xml
<air:AirPricingSolution 
  Key="wQe7wMkB0BKAyGeUkLAAAA==" 
  TotalPrice="GBP1769.20" 
  BasePrice="EUR1701.00" 
  ApproximateTotalPrice="GBP1769.20" 
  ApproximateBasePrice="GBP1493.00" 
  EquivalentBasePrice="GBP1493.00" 
  Taxes="GBP276.20" 
  ApproximateTaxes="GBP276.20"
>
  <air:Journey TravelTime="P0DT17H15M0S">
    <air:AirSegmentRef Key="wQe7wMkB0BKAzGeUkLAAAA==" />
    <air:AirSegmentRef Key="wQe7wMkB0BKA1GeUkLAAAA==" />
  </air:Journey>
  <air:Journey TravelTime="P0DT16H0M0S">
    <air:AirSegmentRef Key="wQe7wMkB0BKA3GeUkLAAAA==" />
    <air:AirSegmentRef Key="wQe7wMkB0BKA5GeUkLAAAA==" />
  </air:Journey>
  <air:LegRef Key="wQe7wMkB0BKA7GeUkLAAAA==" />
  <air:LegRef Key="wQe7wMkB0BKA8GeUkLAAAA==" />
  <air:AirPricingInfo 
    Key="wQe7wMkB0BKA9GeUkLAAAA==" 
    TotalPrice="GBP595.60" 
    BasePrice="EUR582.00" 
    ApproximateTotalPrice="GBP595.60" 
    ApproximateBasePrice="GBP511.00" 
    EquivalentBasePrice="GBP511.00" 
    Taxes="GBP84.60" 
    ApproximateTaxes="GBP84.60" 
    LatestTicketingTime="2018-05-13" 
    PricingMethod="Guaranteed" 
    Refundable="true" 
    ETicketability="Yes" 
    PlatingCarrier="AV" 
    ProviderCode="1G" 
    Cat35Indicator="false"
  >
    <air:FareInfoRef Key="wQe7wMkB0BKADHeUkLAAAA==" />
    <air:FareInfoRef Key="wQe7wMkB0BKAWHeUkLAAAA==" />
    <air:BookingInfo 
      BookingCode="U" 
      BookingCount="9" 
      CabinClass="Economy" 
      FareInfoRef="wQe7wMkB0BKADHeUkLAAAA==" 
      SegmentRef="wQe7wMkB0BKAzGeUkLAAAA==" 
    />
    <air:BookingInfo 
      BookingCode="U" 
      BookingCount="9" 
      CabinClass="Economy" 
      FareInfoRef="wQe7wMkB0BKADHeUkLAAAA==" 
      SegmentRef="wQe7wMkB0BKA1GeUkLAAAA==" 
    />
    <air:BookingInfo 
      BookingCode="U" 
      BookingCount="7" 
      CabinClass="Economy" 
      FareInfoRef="wQe7wMkB0BKAWHeUkLAAAA==" 
      SegmentRef="wQe7wMkB0BKA3GeUkLAAAA==" 
    />
    <air:BookingInfo 
      BookingCode="U" 
      BookingCount="7" 
      CabinClass="Economy" 
      FareInfoRef="wQe7wMkB0BKAWHeUkLAAAA==" 
      SegmentRef="wQe7wMkB0BKA5GeUkLAAAA==" 
    />
  	  …………
  </air:AirPricingInfo>
      ………
  <air:Connection SegmentIndex="0" />
  <air:Connection SegmentIndex="2" />
</air:AirPricingSolution>

```
Contiene precio total de la opción (los 3 primeros caracteres pertenecen a la moneda), listado de trayectos de la opción de vuelo y segmentos de cada trayecto, relacionados mediante el atributo Key con los elementos AirSegment, Clase de cabina (Code=> BookingCode, Type=> CabinClass)


### Estructura XML 2

Esta es la descripción de toda la información alojada en la estructura XML en el archivo response2.xml, deberás entender la estructura y generar el código PHP para convertir estos resultados a estructura JSON (return.json)

```xml
<AirItinerary>
  <ItineraryID>1005</ItineraryID>
  <DepartureDateTime>24/05/2019 10:20</DepartureDateTime>
  <ArrivalDateTime>24/05/2019 18:55</ArrivalDateTime>
  <ArrivalAirportLocationCode>MEX</ArrivalAirportLocationCode>
  <DepartureAirportLocationCode>MAD</DepartureAirportLocationCode>
  <AirItineraryLegs>
    <AirItineraryLeg>
      <TechnicalStops i:nil="true" />
      <DepartureDateTime>24/05/2019 10:20</DepartureDateTime>
      <ArrivalDateTime>24/05/2019 13:00</ArrivalDateTime>
      <ArrivalAirportLocationCode>AMS</ArrivalAirportLocationCode>
      <ArrivalAirportTerminal i:nil="true" />
      <DepartureAirportLocationCode>MAD</DepartureAirportLocationCode>
      <DepartureAirportTerminal>2</DepartureAirportTerminal>
      <AirItineraryLegID>1</AirItineraryLegID>
      <ItineraryID>1005</ItineraryID>
      <FlightNumber>KL1700</FlightNumber>
      <OperatingCarrierCode>KL</OperatingCarrierCode>
      <MarketingCarrierCode>KL</MarketingCarrierCode>
      <AircraftType>73H</AircraftType>
    </AirItineraryLeg>
    …………
  </AirItineraryLegs>
  <TotalDuration>15:35</TotalDuration>
  <SegmentNumber>1</SegmentNumber>
</AirItinerary>

```
Contiene la información de un trayecto: Fecha y hora de salida, fecha y hora de llegada, aeropuerto de destino, aeropuerto de origen del trayecto, y los segmentos de dicho trayecto: Fecha y hora de salida, fecha y hora de llegada, aeropuerto de llegada, terminal de llegada, aeropuerto de origen, terminal de origen, número de vuelo, Aerolínea operadora, aerolínea del vuelo y aeronave de cada uno de los segmentos del vuelo, y la duración total del trayecto.


```xml
<AirPricingGroup>
  <PricingGroupID>111</PricingGroupID>
  <AdultTicketAmount>8704.00</AdultTicketAmount>
  <ChildrenTicketAmount>0</ChildrenTicketAmount>
  <InfantTicketAmount>0</InfantTicketAmount>
  <AdultTaxAmount>368.30</AdultTaxAmount>
  <ChildrenTaxAmount>0</ChildrenTaxAmount>
  <InfantTaxAmount>0</InfantTaxAmount>
  <AgencyFeeAmount>18.00</AgencyFeeAmount>
  <AramixFeeAmount>9.00</AramixFeeAmount>
  <DiscountAmount>0</DiscountAmount>
  <LastTicketDate>13/05/2019</LastTicketDate>
  <FareNotes>
    <AirFareNote>
      <NoteCode>LTD</NoteCode>
      <Category>40</Category>
      <Description>
        LAST TKT DTE13MAY19 - SEE ADV PURCHASE
      </Description>
    </AirFareNote>
    <AirFareNote>
      <NoteCode>SUR</NoteCode>
      <Category>79</Category>
      <Description>FARE VALID FOR E TICKET ONLY</Description>
    </AirFareNote>
  </FareNotes>
  <AirPricingGroupOptions>
    <AirPricingGroupOption>
      <PricingGroupOptionID>111001</PricingGroupOptionID>
      <PricingGroupID>111</PricingGroupID>
      <MarketingCarrierCode>AY</MarketingCarrierCode>
      <AirPricedItineraries>
        <AirPricedItinerary>
          <ItineraryID>1051</ItineraryID>
          <AirPricedItineraryLegs>
            <AirPricedItineraryLeg>
              <AirItineraryLegID>1</AirItineraryLegID>
              <FareCode>Y1N0C9M0</FareCode>
              <FareType>Publicada</FareType>
              <CabinClass>Y</CabinClass>
              <CabinType>M</CabinType>
              <AvailableSeats>9</AvailableSeats>
              <QuantityBaggageADT>1</QuantityBaggageADT>
              <QuantityWeightADT>0</QuantityWeightADT>
              <QuantityTypeADT>N</QuantityTypeADT>
              <MeasureUnitADT i:nil="true" />
            </AirPricedItineraryLeg>
            ...
          <AirPricedItineraryLegs>                    	
        </AirPricedItinerary>
        ...
      </AirPricedItineraries>
      <Notes i:nil="true" />
      <MandatoryTSAData>true</MandatoryTSAData>
      <TransitUSA>true</TransitUSA>
    </AirPricingGroupOption>
    ...
  </AirPricingGroupOptions>
  <GroupID>111</GroupID>
</AirPricingGroup>
```
Contiene la información de cada opción de vuelo, precios (sumar todas las opciones marcadas para obtener el precio total, el símbolo de la moneda no se indica en este xml establecer USD en todas las opciones). Cada AirPricingGroup representa una opción del resultado JSON, donde se incluye la información de cada AirItinerary realizacionados con ItineraryID, y la clase de cada segmento (Code=> CabinClass, Type => CabinType)


### Estructura de JSON resultante:

Encuentra la forma en obtener los resultados de los archivos XML en la siguiente estructura JSON, genera el código PHP y compártelo con nosotros

```javascript
{
  "count": 2, /* Numero de opciones disponibles */
  "flights": [ /* Cada opción de vuelo */ 
    {
      "journeys": [ /*Trayectos del vuelo */ 
        {
          "journey": 3, /*Id del trayecto */
          "airlines": [
            {
              "code": "AV"
            }
          ], /* Aerolíneas que operan el trayecto */
          "departure": {
            "airport": {
              "code": "MAD"
            }, /* Origen del trayecto */
            "date": "2018-09-12", /* Fecha de salida del trayecto */
            "time": "09:05" /* Hora de salida del trayecto */
          },
          "arrival": {
            "airport": {
              "code": "MEX"
            }, /* Destino del trayecto */
            "date": "2018-09-13", /* Fecha de llegada del trayecto */
            "time": "03:50" /* Hora de llegada del trayecto */
          },
          "duration": {
            "hours": 25,
            "minutes": 45
          }, /*  Duración del trayecto */
          "segments": [ /*Segmentos del trayecto */ 
            {
              "type": "flight", /*Tipo de segmento (flight para vuelo y scale para una escala) */
              "departure": {
                "airport": {
                  "code": "MAD",
                  "terminal": "4S"
                }, /*Origen del segmento */
                "date": "2018-09-12", /*Fecha de salida del segmento */
                "time": "09:05" /*Hora de salida del segmento */
              },
              "arrival": {
                "airport": {
                  "code": "BOG",
                  "terminal": "1"
                }, /*Destino del segmento */
                "date": "2018-09-12", /*Fecha de llegada del segmento */
                "time": "12:12" /*Hora de llegada del segmento */
              },
              "isNightly": false, /* Define si el vuelo o la escala es nocturna */
              "duration": {
                "hours": 1,
                "minutes": 53
              }, /* Duración del vuelo o la escala */
              "flightNumber": "27", /* Numero de vuelo del segmento*/
              "aircraft": "788", /* Aeronave del segmento */
              "airline": {
                "code": "AV"
              }, /*Aerolínea del segmento */
              "operatingAirline": {
                "code": "AV"
              }, /*Aerolínea que opera el segmento*/
              "class": {
                "code": "U",
                "type": "M"
              } /*Clase de cabina del segmento*/
            },
            {
              "type": "scale",
              "changeTerminal": false, /* Indica si la escala tiene cambio de terminal */
              "isNightly": false,
              "duration": {
                  "hours": 10,
                  "minutes": 48
              }
            }, 
            ...
          ],
          "scale": 1 /* Numero de escalas del trayecto */
        }, 
        ...
      ],
      "option": {
        "price": { /* Precio total de la opción de vuelo */
          "amount": 2031.6,
          "currency": "EUR"
        }
      }
    }, 
    ...
  ]
}
```

## Notas
- Si hay algo que no esté claro, toma una decisión y documenta por qué lo resolviste de esa manera. 
- No importa si no terminas, queremos ver tus métodos y la forma de resolver el reto. Realiza el reto y envía un mail adjuntando tu CV y un link a tu repositorio con tus resultados a Carolina Gayosso (carolina@kodemia.mx), tienes hasta el **29 de Mayo** para enviar tu ejercicio. 
- Recibirás un mail confirmando tu participación en el evento y los siguientes pasos.

<h2 align='center'> ¡Kodemia te desea todo el éxito! </h2>

---

## Acerca de **ConectaTurismo**

Una empresa con casi 10 años en el sector, ofrece soluciones integrales de comercio electrónico especializado en agencias de viajes, realizando diseños a medida tanto en imagen como en sistemas on-line adaptados a cualquier dispositivo.

CONECTA TURISMO ha conseguido implantarse con éxito en México, mercado importante y que puede servir de puerta de acceso a dos de los mercados más importantes del mundo (USA y Caribe).

Nuestros clientes se encuentran repartidos por todo el territorio Español, así como en Colombia, Costa Rica, Dinamarca, E.E.U.U., Emiratos Árabes Unidos, Honduras, México, Portugal, Argentina, Costa Rica, República Dominicana, y otros países.

Todos los perfiles profesionales de Conecta Turismo cuentan con una excelente formación académica, son de alta cualificación tanto técnica como directiva, cuentan con dilatada experiencia, y la edad media gira en torno a los 30 años.
 
Es un equipo joven, motivado, con experiencia internacional, y que necesita ampliar urgentemente el departamento de desarrollo backend para poder seguir creciendo como empresa.

### Artículos: 
[Revolucionando el sector turístico online con tecnología andaluza](https://www.elmundo.es/andalucia/2015/02/16/54e0ddb222601d3d7f8b4574.html)

[Empresa de desarrollo de software para empresas turísticas da el salto a México](https://www.europapress.es/andalucia/malaga-00356/noticia-empresa-malaguena-desarrollo-software-empresas-turisticas-da-salto-mexico-20150809113135.html)


---

**Checa los pasados Hack The Job**

- [Econduce](https://www.facebook.com/kodemiamx/videos/665171463819928/)
- [Grin](https://www.facebook.com/kodemiamx/videos/2184205198467841/)

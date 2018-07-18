<?php
$content = file_get_contents("php://input");
$update = json_decode($content, true);
if(!$update)
{
  exit;
}
$message = isset($update['message']) ? $update['message'] : "";
$messageId = isset($message['message_id']) ? $message['message_id'] : "";
$chatId = isset($message['chat']['id']) ? $message['chat']['id'] : "";
$firstname = isset($message['chat']['first_name']) ? $message['chat']['first_name'] : "";
$lastname = isset($message['chat']['last_name']) ? $message['chat']['last_name'] : "";
$username = isset($message['chat']['username']) ? $message['chat']['username'] : "";
$date = isset($message['date']) ? $message['date'] : "";
$text = isset($message['text']) ? $message['text'] : "";
$text = trim($text);
$text = strtolower($text);
header("Content-Type: application/json");
$response = '';
if(strpos($text, "/start") === 0 || $text=="benvenuto")
{
	$response .= "MERDE DATE IL BENVENUTO AL FIGLIO DI JARVIS!!". PHP_EOL;
}
if(strpos($text, "adati"))
{
	$response .= "CAZZO FLIPPI? NON TI HO DATO IL PERMESSO! CITTONE!". PHP_EOL;
}
if(strpos($text,"jarvato"))
{
	$response .= "CAZZO FLIPPI CITTONE!". PHP_EOL;
}
if(strpos($text,"jarvizzato"))
{
	$response .= "CAZZO FLIPPI? NON TI HO DATO IL PERMESSO! CITTONE!". PHP_EOL;
}
if(strpos($text,"puffi"))
{
	$response .= "WIN TRADING! CITTONE!". PHP_EOL;
}
if(strpos($text,"puffo"))
{
	$response .= "WIN TRADING! CITTONE!". PHP_EOL;
}
if(strpos($text,"cubi"))
{
	$response .= "RICARICATE STRONZI!". PHP_EOL;
}
if(strpos($text,"field"))
{
	$response .= "IO HO FATTO 2M MU DA SOLO!". PHP_EOL;
}
if(strpos($text,"farm"))
{
	$response .= "LA FARM NON E' ADATA! LA FARM E' PUFFA!". PHP_EOL;
}
if(strpos($text,"amico"))
{
	$response .= "COMANDO ERRATO! IO NON HO AMICI!". PHP_EOL;
}
if(strpos($text,"op"))
{
	$response .= "FIELDO POCO, MA QUANDO FIELDO......PORCODIO!!". PHP_EOL;
}
if(strpos($text,"fff"))
{
	$response .= "IL GRUPPO UFFICIALE ENL NON E' FFF MA ENL PAVIA!". PHP_EOL;
}
if(strpos($text,"walthanar"))
{
	$response .= "SPIA!". PHP_EOL;
}
if(strpos($text,"fisiofede"))
{
	$response .= "CITTONISSIMO!". PHP_EOL;
}
if(strpos($text,"2 milioni da solo"))
{
	$response .= "FIELDO POCO, MA QUANDO FIELDO PORTO SEMPRE LA MAMMA!!". PHP_EOL;
}
if(strpos($text,"garzetta"))
{
	$response .= "OH, LASCIA STARE MIA MADRE! NON SA USARE GLI SMS MA GIOCA A INGRESS!!". PHP_EOL;
}
if(strpos($text,"adato"))
{
	$response .= "CAZZO FLIPPI? NON TI HO DATO IL PERMESSO! CITTONE!". PHP_EOL;
}
if(strpos($text,"adizzati"))
{
	$response .= "CAZZO FLIPPI? NON TI HO DATO IL PERMESSO! CITTONE!". PHP_EOL;
}
if(strpos($text,"adizzato"))
{
	$response .= "CAZZO FLIPPI? NON TI HO DATO IL PERMESSO! CITTONE!". PHP_EOL;
}
if(strpos($text,"conte"))
{
	$response .= "CONTE CITTONE!". PHP_EOL;
}
if(strpos($text,"fazione"))
{
	$response .= "IO SONO FAZIONE!". PHP_EOL;
}
if(strpos($text,"ANCORE"))
{
	$response .= "MI SONO FATTO 80KM PER SPACCARE LE ANCORE BLU!". PHP_EOL;
}
if(strpos($text,"guardian"))
{
	$response .= "LO SANNO TUTTI COME FUNZIONANO I GUARDIAN DALLA LOMELLINA A PONTECURONE!". PHP_EOL;
}
if(strpos($text,"textexx"))
{
	$response .= "SU TEXTEXX NON HO DUBBI, SO CHE GIOCA BENE!". PHP_EOL;
}
if(strpos($text,"settimana"))
{
	$response .= "AI MIEI TEMPI A SETTIMANA CHIUDEVO 500K!". PHP_EOL;
}
if(strpos($text,"jarvizzati"))
{
	$response .= "CAZZO FLIPPI? NON TI HO DATO IL PERMESSO! CITTONE!". PHP_EOL;
}
if(strpos($text,"doctorture"))
{
	$response .= "SPIA!". PHP_EOL;
}
if(strpos($text,"vesperio"))
{
	$response .= "MI AVEVI PROMESSO PAVIA VERDE!". PHP_EOL;
}
if(strpos($text,"tempi"))
{
	$response .= "AI MIEI TEMPI NON GIOCAVA NESSUNO!". PHP_EOL;
}
if(strpos($text,"male"))
{
	$response .= "IO HO DIFESO PAVIA DALL' ESERCITO DEL PUFFO SERSE!". PHP_EOL;
}
if(strpos($text,"madre"))
{
	$response .= "GARZETTA NON ESISTE!". PHP_EOL;
}
if(strpos($text,"storia"))
{
	$response .= "IO SCRIVO LA STORIA DI INGRESS, VADO ALLE ANOMALY!". PHP_EOL;
}
if(strpos($text,"storie"))
{
	$response .= "IO SONO LA STORIA DI INGRESS!". PHP_EOL;
}
if(strpos($text,"#2milionidasolo"))
{
	$response .= "FIELDO POCO, MA QUANDO FIELDO PORTO SEMPRE LA MAMMA!!". PHP_EOL;
}
if(strpos($text,"madre"))
{
	$response .= "LA MAMMA NON ESISTE!!". PHP_EOL;
}
if(strpos($text,"turmy"))
{
	$response .= "TURMY HE IS ALIVE ! BACK TO CONQUER THE XM!!!". PHP_EOL;
}
if(strpos($text,"droga"))
{
	$response .= "COCAINA IS FOR BOYS, XM IS FOR TURMY!!". PHP_EOL;
}
if(strpos($text,"2milionidasolo"))
{
	$response .= "FIELDO POCO, MA QUANDO FIELDO PORTO SEMPRE LA MAMMA!!". PHP_EOL;
}
if(strpos($text,"bombe"))
{
	$response .= "L' ISIS NON ESISTE! L' ISIS SONO IO!". PHP_EOL;
}
if(strpos($text,"pavia"))
{
	$response .= "IO SONO L' UNICO SIGNORE E COMANDANTE DI PAVIA!". PHP_EOL;
}
if(strpos($text,"pv"))
{
	$response .= "IO GOVERNO PAVIA!". PHP_EOL;
}
if(strpos($text,"skydiverstyle"))
{
	$response .= "SKYDIVERSTYLE NON E' UNO ZAINO E' LA MIA BADANTE!". PHP_EOL;
}
if(strpos($text,"risultati"))
{
	$response .= "GLI ALTRI HANNNO RISULTATI MIGLIORI DEI MIEI? ALLORA WHINO COME UN' ISTERICA! E SONO TUTTI CITTONI!". PHP_EOL;
}
if(strpos($text,"minaccia"))
{
	$response .= "IO TI ADO IL GUARDIAN! QUELLO DEI PUFFI NON LI SO' ....MA QUELLI DEGLI ENL LI SO TUTTI!". PHP_EOL;
}
if(strpos($text,"cross"))
{
	$response .= "GIOCO INTORNO A CASA MIA MA TI CROSSO A 10000 KM!". PHP_EOL;
}
if(strpos($text,"luna"))
{
	$response .= "IO HO PORTALI SULLA LUNA!". PHP_EOL;
}
if(strpos($text,"marte"))
{
	$response .= "IO HO PORTALI SU MARTE!!". PHP_EOL;
}
if(strpos($text,"pinnare"))
{
	$response .= "MI SPACCANO LA FARM? WHINO COME UN' ISTERICA E NELLE MIE CHAT PINNO IL MESSAGGIO DI QUANTI RESO MANCANO PER UPPARE LA MIA FARM!". PHP_EOL;
}
if(strpos($text,"up"))
{
	$response .= "IO SOLO LA MIA FARM UPPO CON I MIEI NMILA PROFILI L8! LE ALTRE FARM SONO PUFFE!". PHP_EOL;
}
if(strpos($text,"soldi"))
{
	$response .= "MI CHIEDI DI SPACCARE O MI SPACCHI UN PORTALE? MI DEVI RIMBORSARE!". PHP_EOL;
}
if(strpos($text,"gruppo"))
{
	$response .= "IO LE FARM LE FACCIO DA SOLO!". PHP_EOL;
}
if(strpos($text,"fallito"))
{
	$response .= " IO SONO UN FALLITO!". PHP_EOL;
}
if(strpos($text,"dominikilsanto"))
{
	$response .= "WHINATORE SERIALE!". PHP_EOL;
}
$parameters = array('chat_id' => $chatId, "text" => $response);
$parameters["method"] = "sendMessage";
echo json_encode($parameters);

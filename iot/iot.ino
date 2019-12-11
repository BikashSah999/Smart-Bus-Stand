#include<ESP8266WiFi.h>
//#include<WebServer.h>
#include<ESP8266HTTPClient.h>
#include<WiFiClient.h>
//WebServer server;
char* ssid = "shresthabasanta";
char* password = "CLFA441420";
void setup() {
  // put your setup code here, to run once:
  Serial.begin(115200);
  WiFi.begin(ssid, password);
  while (WiFi.status() != WL_CONNECTED)
  {
    Serial.println("Wifi Not Connected");
    delay(1000);
  }
  Serial.println("WiFi Connected");
  Serial.print("IP ADDRESS:");
  Serial.print(WiFi.localIP());
  // server.begin();
  // server.on("/print",show);
  // server.begin();
}

void loop() {
  // put your main code here, to run repeatedly:
  // server.handleClient();
  int t = 45;
  if ((WiFi.status() == WL_CONNECTED)) { //Check the current connection status

    HTTPClient http;
   // WiFiClient client ; 

    http.begin("http://192.168.1.76/Hackathon/insert.php?distance="+String(t)); //Specify the URL
    http.addHeader("Content-Type", "application/json");
    int httpCode = http.GET();                                        //Make the request

    if (httpCode > 0) { //Check for the returning code

      String payload = http.getString();
      Serial.println(httpCode);
      Serial.println(payload);
    }

    else {
      Serial.println("Error on HTTP request");
    }

    http.end(); //Free the resources
  }

  delay(10000);
}

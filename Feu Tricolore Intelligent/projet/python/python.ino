#include <SPI.h>        
#include <SD.h>         
File F1,F2,F3,F4;
int route1,route2,route3,route4;
int R1=4,R2=7;
int J1=3,J2=6;
int V1=2,V2=5;
void setup(){
    // Open serial communications and wait for port to open:
  Serial.begin(9600);
  while (!Serial) {
  }
  
  if (!SD.begin()) {
    Serial.println("initialization failed!");
    while (1);
  }
 
  F1 = SD.open("f1.txt");
  F2 = SD.open("f2.txt");
  F3= SD.open("f3.txt");
  F4 = SD.open("f4.txt");

  if (F1&F2&F3&F4) {
    
    while (F1.available()&F2.available()&F3.available()&F4.available()) {
      route1=int(F1.read());
      Serial.write(route1);
      route2=int(F2.read());
      Serial.write(route2);
      route3=int(F3.read());
      Serial.write(route3);
      route4=int(F4.read());
      Serial.write(route4);
    }
    
    // close the file:
    F1.close();
    F2.close();
    F3.close();
    F4.close();
  } else {
    Serial.println("error opening ");
  }
  pinMode(R1,OUTPUT);
  pinMode(J1,OUTPUT);
  pinMode(V1,OUTPUT); 
  pinMode(R2,OUTPUT);
  pinMode(J2,OUTPUT);
  pinMode(V2,OUTPUT);

}
void loop(){
  if(route1<=route3 & route1<=route4 & route2<=route3 & route2<=route4)
  { 
  digitalWrite(R1,HIGH);
  digitalWrite(V2,HIGH);
  delay(3000);
  digitalWrite(V2,LOW);
  digitalWrite(R1,HIGH);
  digitalWrite(J2,HIGH);
  delay(1000);
  digitalWrite(R1,LOW);
  digitalWrite(J2,LOW);
  }
  else{
  digitalWrite(R2,HIGH);
  digitalWrite(V1,HIGH);
  delay(3000);
  digitalWrite(V1,LOW);
  digitalWrite(R2,HIGH);
  digitalWrite(J1,HIGH);
  delay(1000);
  digitalWrite(R2,LOW);
  digitalWrite(J1,LOW);
  
  }
 
}

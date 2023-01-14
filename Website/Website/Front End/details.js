function details(price, horsepower, torque, topspeed , doors, safety){
    var newLine = "\r\n"
    var message = "Price = " + price + " egp" + newLine
    message += "Horse Power = " + horsepower + " hp" + newLine;
    message += "Torque = " + torque + " n.m" + newLine;
    message += "Top Speed = " + topspeed + " km/h" + newLine;
    message += "Number of Doors = " + doors + " Doors" + newLine;
    message += "Saftey Rating = " + safety + " Stars" + newLine;
    alert(message);
  }
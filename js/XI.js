//data
var players = new Object();
var team = {
  delanteros: [],
  centrocampistas: [],
  defensas: [],
  porteros: null,
  form: '433'
};
//methods
function getPlayers(formation) {
  var formData = new FormData();
  if (formation == "433") {
    formData.append("qty_st", 9); 
    formData.append("qty_md", 9);
    formData.append("qty_df", 12);
  }
  axios
    .post("php-scripts/playersMgmt.php", formData)
    .then(response => {
      players = response.data;
      console.log(players);
    })
    .catch(error => {
      console.log(error);
    });
}
function choosePlayer(num, pos, pos2, callback) {
  document.getElementById("dialogChoosePlayerBoxes").innerHTML = "";
  for (let index = num; index < num + 3; index++) {
    if (pos == "delantero") {
      document.getElementById("dialogChoosePlayerBoxes").innerHTML += `
        <div class="col">
          <div class="card fade-in1">
              <button onclick="addPlayer('${pos2}', 'delantero', ${index} )" class="btn btn-img-card"><img class="d-block w-100" src="${players.delanteros[index].Imagen}" alt="Third slide" /></button>
          </div>
        </div>
        `;
    } else if(pos == "centrocampista"){
      document.getElementById("dialogChoosePlayerBoxes").innerHTML += `
        <div class="col">
          <div class="card fade-in1">
              <button onclick="addPlayer('${pos2}', 'centrocampista', ${index} )" class="btn btn-img-card"><img class="d-block w-100" src="${players.centrocampistas[index].Imagen}" alt="Third slide" /></button>
          </div>
        </div>
        `;
    } else if (pos == "defensa"){
      document.getElementById("dialogChoosePlayerBoxes").innerHTML += `
        <div class="col">
          <div class="card fade-in1">
              <button onclick="addPlayer('${pos2}', 'defensa', ${index} )" class="btn btn-img-card"><img class="d-block w-100" src="${players.defensas[index].Imagen}" alt="Third slide" /></button>
          </div>
        </div>
        `;
    } else if (pos == "portero"){
      document.getElementById("dialogChoosePlayerBoxes").innerHTML += `
        <div class="col">
          <div class="card fade-in1">
              <button onclick="addPlayer('${pos2}', 'portero', ${index} )" class="btn btn-img-card"><img class="d-block w-100" src="${players.porteros[index].Imagen}" alt="Third slide" /></button>
          </div>
        </div>
        `;
    }
    
  }
  callback();
  //document.getElementById("dialogChoosePlayer").style.display = "inline";
}
function modalPlayer(){
  document.getElementById("dialogChoosePlayer").style.display = "inline";
}
function addPlayer(id,pos,index) {
  document.getElementById("dialogChoosePlayer").style.display = "none";
  if (pos == "delantero") {
    document.getElementById(id).innerHTML = `<img class="d-block w-100" src="${players.delanteros[index].Imagen}" alt="Third slide" />`;
    team.delanteros.push(players.delanteros[index]);
  } else if (pos == "centrocampista"){
    document.getElementById(id).innerHTML = `<img class="d-block w-100" src="${players.centrocampistas[index].Imagen}" alt="Third slide" />`;
    team.centrocampistas.push(players.centrocampistas[index]);
  } else if (pos == "defensa") {
    document.getElementById(id).innerHTML = `<img class="d-block w-100" src="${players.defensas[index].Imagen}" alt="Third slide" />`;
    team.defensas.push(players.defensas[index]);
  } else if (pos = "portero"){
    document.getElementById(id).innerHTML = `<img class="d-block w-100" src="${players.porteros[index].Imagen}" alt="Third slide" />`;
    team.portero = players.porteros[index];
  }
  
  console.table(team);
}
//mounted

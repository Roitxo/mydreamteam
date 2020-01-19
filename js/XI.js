//data
var players = new Object();
var counter = 0;
var team = {
  delanteros: [],
  centrocampistas: [],
  defensas: [],
  porteros: null,
  form: "433"
};
var limit = 20;
//methods
function getBestTeams() {
  var form = new FormData();
  form.append("action", "getBest");
  form.append("limit", limit);
  axios
    .post("php-scripts/teamMgmt.php", form)
    .then(response => {
      console.log(response.data);
      response.data.forEach((element, index) => {
        document.getElementById("table-best-teams").innerHTML += `
          <tr>
            <th scope="row">${index + 1}</th>
            <td>${element.user}</td>
            <td>${element.valoracion}</td>
            <td>${element.formacion}</td>
            <td>${element.fecha}</td>
            <td><a href="team.php?id=${
              element.id
            }" class="btn btn-dark"><i class="fas fa-eye"></i></a></td>
          </tr>
        `;
      });
    })
    .catch(error => {
      console.log(error);
    });
}
function getBestUsers() {
  var form = new FormData();
  form.append("action", "getBestU");
  form.append("limit", limit);
  axios
    .post("php-scripts/teamMgmt.php", form)
    .then(response => {
      console.log(response.data);
      response.data.forEach((element, index) => {
        document.getElementById("table-best-teams").innerHTML += `
          <tr>
            <th scope="row">${index + 1}</th>
            <td>${element.user}</td>
            <td>${element.valoracion}</td>
            <td>${element.fecha}</td>
            <td><a href="team.php?id=${
              element.id
            }" class="btn btn-dark"><i class="fas fa-eye"></i></a></td>
          </tr>
        `;
      });
    })
    .catch(error => {
      console.log(error);
    });
}
function getAllPlayers() {
  var formData = new FormData();
  formData.append("action", "getAllPlayers");
  axios
    .post("php-scripts/playersMgmt.php", formData)
    .then(response => {
      players = response.data;
      console.log(players);
      players.delanteros.forEach(element => {
        var html = `
          <div class="col-2">
              <div class="card">
                <img class="d-block w-100" src="${element.Imagen}" alt="Third slide" />
              </div>
              <p class="inline"><span class="color-green media inline">${element.media}</span> ${element.nombre}</p>
          </div>   
        `;
        document.getElementById("strikers").innerHTML += html;
      });
      players.centrocampistas.forEach(element => {
        var html = `
          <div class="col-2">
              <div class="card">
                <img class="d-block w-100" src="${element.Imagen}" alt="Third slide" />
              </div>
              <p class="inline"><span class="color-green media inline">${element.media}</span> ${element.nombre}</p>
          </div>   
        `;
        document.getElementById("mid").innerHTML += html;
      });
      players.defensas.forEach(element => {
        var html = `
          <div class="col-2">
              <div class="card">
                <img class="d-block w-100" src="${element.Imagen}" alt="Third slide" />
              </div>
              <p class="inline"><span class="color-green media inline">${element.media}</span> ${element.nombre}</p>
          </div>   
        `;
        document.getElementById("defenders").innerHTML += html;
      });
      players.porteros.forEach(element => {
        var html = `
          <div class="col-2">
              <div class="card">
                <img class="d-block w-100" src="${element.Imagen}" alt="Third slide" />
              </div>
              <p class="inline"><span class="color-green media inline">${element.media}</span> ${element.nombre}</p>
          </div>   
        `;
        document.getElementById("goalkeepers").innerHTML += html;
      });
    })

    .catch(error => {
      console.log(error);
    });
}
function getPlayers(formation) {
  var formData = new FormData();
  if (formation == "433") {
    formData.append("qty_st", 9);
    formData.append("qty_md", 9);
    formData.append("qty_df", 12);
    formData.append("action", "getPlayers");
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
    } else if (pos == "centrocampista") {
      document.getElementById("dialogChoosePlayerBoxes").innerHTML += `
        <div class="col">
          <div class="card fade-in1">
              <button onclick="addPlayer('${pos2}', 'centrocampista', ${index} )" class="btn btn-img-card"><img class="d-block w-100" src="${players.centrocampistas[index].Imagen}" alt="Third slide" /></button>
          </div>
        </div>
        `;
    } else if (pos == "defensa") {
      document.getElementById("dialogChoosePlayerBoxes").innerHTML += `
        <div class="col">
          <div class="card fade-in1">
              <button onclick="addPlayer('${pos2}', 'defensa', ${index} )" class="btn btn-img-card"><img class="d-block w-100" src="${players.defensas[index].Imagen}" alt="Third slide" /></button>
          </div>
        </div>
        `;
    } else if (pos == "portero") {
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
function modalPlayer() {
  document.getElementById("dialogChoosePlayer").style.display = "inline";
}
function addPlayer(id, pos, index) {
  document.getElementById("dialogChoosePlayer").style.display = "none";
  if (pos == "delantero") {
    counter++;
    document.getElementById(
      id
    ).innerHTML = `<img class="d-block w-100" src="${players.delanteros[index].Imagen}" alt="Third slide" />`;
    team.delanteros.push(players.delanteros[index]);
  } else if (pos == "centrocampista") {
    counter++;
    document.getElementById(
      id
    ).innerHTML = `<img class="d-block w-100" src="${players.centrocampistas[index].Imagen}" alt="Third slide" />`;
    team.centrocampistas.push(players.centrocampistas[index]);
  } else if (pos == "defensa") {
    counter++;
    document.getElementById(
      id
    ).innerHTML = `<img class="d-block w-100" src="${players.defensas[index].Imagen}" alt="Third slide" />`;
    team.defensas.push(players.defensas[index]);
  } else if ((pos = "portero")) {
    counter++;
    document.getElementById(
      id
    ).innerHTML = `<img class="d-block w-100" src="${players.porteros[index].Imagen}" alt="Third slide" />`;
    team.portero = players.porteros[index];
  }
  console.table(team);
  if (counter == 11) end();
}
function end() {
  var total = 0;
  var media = 0;
  team.delanteros.forEach(element => {
    total += element.media;
  });
  team.centrocampistas.forEach(element => {
    total += element.media;
  });
  team.defensas.forEach(element => {
    total += element.media;
  });
  total += team.portero.media;

  media = total / 11;
  window.scrollTo(0, 0);

  //insert team
  var form = new FormData();
  form.append("userid", document.getElementById("userid").value);
  form.append("avg", media.toFixed(2));
  form.append("action", "insert");
  form.append("team", JSON.stringify(team));
  axios
    .post("php-scripts/teamMgmt.php", form)
    .then(response => {
      console.log(response.data);
    })
    .catch(error => {
      console.log(error);
    });
  //display summary
  document.getElementById("rating").innerHTML = media.toFixed(2);
  document.getElementById("summary").style.display = "inline";
}
//mounted

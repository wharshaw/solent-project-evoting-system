

//get the doughnut chart canvas
var ctx1 = $("#candidates");
var ctx2 = $("#maha");
var ctx3 = $("#all");


$(function(){

  //get the doughnut chart canvas
  var ctx1 = $("#candidates");
  var ctx2 = $("#maha");
  var ctx3 = $("#all");

  //doughnut chart data
  var data1 = {
    labels: ["MAHINDA", "GOTABAYA", "SAJITH"],
    datasets: [
      {
        label: "TeamA Score",
        data: [70, 15, 15],
        backgroundColor: [
          "#3c8dbc",
          "#999999",
          "#979797"
        ],
        borderColor: [
          "#000000",
          "#999999",
          "#000000"
        ],
        borderWidth: [1, 1, 1]
      }
    ]
  };

  //doughnut chart data
  var data2 = {
    labels: ["ACTUAL HARVESTED VOLUME", "CROP DAMAGES"],
    datasets: [
     {
        label: "TeamA Score",
        data: [58, 42],
        backgroundColor: [
          "#f7a41c",
          "#979797"
        ],
        borderColor: [
          "#000000",
          "#000000"
        ],
        borderWidth: [1, 1]
      }
    ]
  };

  //doughnut chart data
  var data3 = {
    labels: ["ACTUAL HARVESTED VOLUME", "CROP DAMAGES"],
    datasets: [
      {
        label: "TeamA Score",
        data: [40, 60],
        backgroundColor: [
          "#f7a41c",
          "#979797"
        ],
        borderColor: [
          "#000000",
          "#000000"
        ],
        borderWidth: [1, 1]
      }
    ]
  };

  //options
  var options = {
    responsive: true,
    title: {
      display: true,
      position: "top",
      fontSize: 14,
      fontColor: "#111"
    },
    legend: {
      display: true,
      position: "bottom",
      labels: {
        fontColor: "#333",
        fontSize: 14
      }
    }
  };

  //create Chart class object
  var chart1 = new Chart(ctx1, {
    type: "doughnut",
    data: data1,
    options: options
  });

  //create Chart class object
  var chart2 = new Chart(ctx2, {
    type: "doughnut",
    data: data2,
    options: options
  });

  //create Chart class object
  var chart3 = new Chart(ctx3, {
    type: "doughnut",
    data: data3,
    options: options
  });
});
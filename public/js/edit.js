function edit(e) {
    document.getElementById("labelname" + e).style.display = "none";
    document.getElementById("nomT" + e).style.display = "inline";
    document.getElementById("labelimg" + e).style.display = "none";
    document.getElementById("imgT" + e).style.display = "inline";
    document.getElementById("editButton" + e).style.display = "none";
    document.getElementById("deleteButton" + e).style.display = "none";
    document.getElementById("saveButton" + e).style.display = "inline-block";
    document.getElementById("cancelButton" + e).style.display = "inline-block";
  }
  function cancel(e) {
    document.getElementById("labelname" + e).style.display = "inline";
    document.getElementById("nomT" + e).style.display = "none";
    document.getElementById("labelimg" + e).style.display = "inline";
    document.getElementById("imgT" + e).style.display = "none";
    document.getElementById("editButton" + e).style.display = "inline-block";
    document.getElementById("deleteButton" + e).style.display = "inline-block";
    document.getElementById("saveButton" + e).style.display = "none";
    document.getElementById("cancelButton" + e).style.display = "none";
  }
const filtrolote = () => {
  const columns = [
    { name: 'Lote', index: 0, isFilter: true }
  ]
  const filterColumns = columns.filter(c => c.isFilter).map(c => c.index)
  const trs = document.querySelectorAll(`#tabela_dados tr:not(.header)`)
  const filter = document.querySelector('#lote').value
  const regex = new RegExp(`^${filter}$`, 'i');
  const isFoundInTds = td => regex.test(td.innerHTML)
  const isFound = childrenArr => childrenArr.some(isFoundInTds)
  const setTrStyleDisplay = ({ style, children }) => {
    style.display = isFound([
      ...filterColumns.map(c => children[c])
    ]) ? '' : 'none'
  }
  trs.forEach(setTrStyleDisplay)
}

const filtroqtd = () => {
  const columns = [
    { name: 'quantidade', index: 2, isFilter: true }
  ]
  const filterColumns = columns.filter(c => c.isFilter).map(c => c.index)
  const trs = document.querySelectorAll(`#tabela_dados tr:not(.header)`)
  const filter = document.querySelector('#quantidade').value
  const regex = new RegExp(`^${filter}$`, 'i');
  const isFoundInTds = td => regex.test(td.innerHTML)
  const isFound = childrenArr => childrenArr.some(isFoundInTds)
  const setTrStyleDisplay = ({ style, children }) => {
    style.display = isFound([
      ...filterColumns.map(c => children[c])
    ]) ? '' : 'none'
  }
  
  trs.forEach(setTrStyleDisplay)
}

const filtroun = () => {
  const columns = [
    { name: 'Un_medida', index: 1, isFilter: true }
  ]
  const filterColumns = columns.filter(c => c.isFilter).map(c => c.index)
  const trs = document.querySelectorAll(`#tabela_dados tr:not(.header)`)
  const filter = document.querySelector('#Un_medida').value
  const regex = new RegExp(`^${filter}$`, 'i');
  const isFoundInTds = td => regex.test(td.innerHTML)
  const isFound = childrenArr => childrenArr.some(isFoundInTds)
  const setTrStyleDisplay = ({ style, children }) => {
    style.display = isFound([
      ...filterColumns.map(c => children[c])
    ]) ? '' : 'none'
  }
  
  trs.forEach(setTrStyleDisplay)
}

const filtrovalor = () => {
  const columns = [
    { name: 'valor', index: 3, isFilter: true }
  ]
  const filterColumns = columns.filter(c => c.isFilter).map(c => c.index)
  const trs = document.querySelectorAll(`#tabela_dados tr:not(.header)`)
  const filter = document.querySelector('#valor').value
  const regex = new RegExp(`^${filter}$`, 'i');
  const isFoundInTds = td => regex.test(td.innerHTML)
  const isFound = childrenArr => childrenArr.some(isFoundInTds)
  const setTrStyleDisplay = ({ style, children }) => {
    style.display = isFound([
      ...filterColumns.map(c => children[c])
    ]) ? '' : 'none'
  }
  
  trs.forEach(setTrStyleDisplay)
}

const filtrocat = () => {
  const columns = [
    { name: 'categoria', index: 4, isFilter: true }
  ]
  const filterColumns = columns.filter(c => c.isFilter).map(c => c.index)
  const trs = document.querySelectorAll(`#tabela_dados tr:not(.header)`)
  const filter = document.querySelector('#categoria').value
  const regex = new RegExp(`^${filter}$`, 'i');
  const isFoundInTds = td => regex.test(td.innerHTML)
  const isFound = childrenArr => childrenArr.some(isFoundInTds)
  const setTrStyleDisplay = ({ style, children }) => {
    style.display = isFound([
      ...filterColumns.map(c => children[c])
    ]) ? '' : 'none'
  }

  trs.forEach(setTrStyleDisplay)
}

const filtrovalidade = () => {
  const columns = [
    { name: 'validade', index: 5, isFilter: true }
  ]
  const filterColumns = columns.filter(c => c.isFilter).map(c => c.index)
  const trs = document.querySelectorAll(`#tabela_dados tr:not(.header)`)
  const filter = document.querySelector('#validade').value
  const regex = new RegExp(`^${filter}$`, 'i');
  const isFoundInTds = td => regex.test(td.innerHTML)
  const isFound = childrenArr => childrenArr.some(isFoundInTds)
  const setTrStyleDisplay = ({ style, children }) => {
    style.display = isFound([
      ...filterColumns.map(c => children[c])
    ]) ? '' : 'none'
  }
  trs.forEach(setTrStyleDisplay)
}

document.getElementById("lote").onchange = filtrolote();
document.getElementById("quantidade").onchange = filtroqtd();
document.getElementById("Un_medida").onchange = filtroun();
document.getElementById("valor").onchange = filtrovalor();
document.getElementById("categoria").onchange = filtrocat();
document.getElementById("validade").onchange = filtrovalidade();
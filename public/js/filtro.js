const filtroitem = () => {
    const columns = [
      { name: 'Item', index: 0, isFilter: true }
    ]
    const filterColumns = columns.filter(c => c.isFilter).map(c => c.index)
    const trs = document.querySelectorAll(`#tabela_dados tr:not(.header)`)
    const filter = document.querySelector('#item').value
    const regex = new RegExp(escape(filter), 'i')
    const isFoundInTds = td => regex.test(td.innerHTML)
    const isFound = childrenArr => childrenArr.some(isFoundInTds)
    const setTrStyleDisplay = ({ style, children }) => {
      style.display = isFound([
        ...filterColumns.map(c => children[c]) // <-- filter Columns
      ]) ? '' : 'none'
    }
    
    trs.forEach(setTrStyleDisplay)
}

const filtrolote = () => {
    const columns = [
      { name: 'Lote', index: 5, isFilter: true }
    ]
    const filterColumns = columns.filter(c => c.isFilter).map(c => c.index)
    const trs = document.querySelectorAll(`#tabela_dados tr:not(.header)`)
    const filter = document.querySelector('#lote').value
    const regex = new RegExp(escape(filter), 'i')
    const isFoundInTds = td => regex.test(td.innerHTML)
    const isFound = childrenArr => childrenArr.some(isFoundInTds)
    const setTrStyleDisplay = ({ style, children }) => {
      style.display = isFound([
        ...filterColumns.map(c => children[c]) // <-- filter Columns
      ]) ? '' : 'none'
    }
    trs.forEach(setTrStyleDisplay)
}

document.getElementById("item").onchange = filtroitem();
document.getElementById("lote").onchange = filtroitem();
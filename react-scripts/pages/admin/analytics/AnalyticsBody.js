const AnalyticsBody = () => {
  const [curPage, setCurPage] = React.useState(1);
  const [rowsPerPage, setRowsPerPage] = React.useState(5);
  const totalNoOfPages = () => Math.ceil(analytics.length / rowsPerPage);
  const curRows = () => {
    return analytics.slice(
      rowsPerPage * (curPage - 1),
      Math.min(analytics.length, rowsPerPage * (curPage - 1) + rowsPerPage)
    );
  };
  const changeRowsPerPage = (rowsPerPage) => {
    setCurPage(1);
    setRowsPerPage(parseInt(rowsPerPage));
  };
  return (
    <>
      <Title text="Analytics" />
      <VisitCount />
      <RowCount curVal={rowsPerPage} setVal={changeRowsPerPage} />
      <AnalyticsTable
        curRows={curRows}
        startIndex={rowsPerPage * (curPage - 1)}
      />
      <Pagination
        currentPage={curPage}
        setCurPage={setCurPage}
        totalNoOfPages={totalNoOfPages}
      />
    </>
  );
};

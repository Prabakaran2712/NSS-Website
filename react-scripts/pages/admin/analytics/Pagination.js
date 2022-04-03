const Pagination = ({ currentPage, setCurPage, totalNoOfPages }) => {
  return (
    <div class="row justify-content-center align-items-center">
      <div class="col-auto">
        <button
          class="btn btn-primary"
          onClick={() => setCurPage(currentPage - 1)}
          disabled={currentPage == 1}
        >
          Previous
        </button>
      </div>
      <div class="col-auto">
        <div class="lead">
          Page {currentPage} of {totalNoOfPages()}
        </div>
      </div>
      <div class="col-auto">
        <button
          class="btn btn-primary"
          onClick={() => setCurPage(currentPage + 1)}
          disabled={currentPage == totalNoOfPages()}
        >
          Next
        </button>
      </div>
    </div>
  );
};

const Accordion = ({ incharge, type, title }) => {
    let thisIncharges;
    if(type==="design"){
        thisIncharges = designTeam[incharge];
    } else {
        thisIncharges = incharges[incharge];
    }
    return <div class="accordion-item my-3 border-top">
        <h2 class="accordion-header" id={`a${incharge}`}>
            <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target={`#${incharge}`}>
                {title}
            </button>
        </h2>
        <div id={incharge} class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Reg. no.</th>
                        </tr>
                    </thead>
                    <tbody>
                        {thisIncharges && thisIncharges.map((student, index) =>
                            <tr>
                                <td>{index + 1}</td>
                                <td>{student['name']}</td>
                                <td>{student['reg']}</td>
                            </tr>
                        )}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
}
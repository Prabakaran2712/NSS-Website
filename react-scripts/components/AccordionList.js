const AccordionList = ({ events, title }) => {
    return <div class="col" id="curSession">
        <div class="row">
            <div class="col-fluid">
                <h3 class="display-6 mt-3">{title}</h3>
                {events && events.map(event =>
                    <div class="accordion" id="accordion3">
                        <div class="accordion-item my-3">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target={`#a${event.id}`}>
                                    {event.title}
                                </button>
                            </h2>
                            <div id={`a${event.id}`} class="accordion-collapse collapse" data-bs-parent="#accordion2">
                                <div class="accordion-body">
                                    <div class="flex-item">
                                        <img src={event.image} alt="session-image" class="img-fluid" />
                                    </div>
                                    <div class="flex-item">
                                        {event.content}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                )}
            </div>
        </div>
    </div>
}
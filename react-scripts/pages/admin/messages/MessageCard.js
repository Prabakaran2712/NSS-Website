const MessageCard = ({ message, index, read, showOnlyUnread }) => {
  if (!showOnlyUnread || message.message_read == 0) {
    return (
      <div class="card w-50 my-3">
        <div class="card-body">
          <div class="card-title h5">
            <span class="display-6">{message.email}</span>
            {message.message_read == 0 && (
              <span class="badge bg-success mx-1">New</span>
            )}
          </div>
          <blockquote class="blockquote">
            <p>{message.message}</p>
          </blockquote>
          {message.message_read == 0 && (
            <div>
              <button
                onClick={() => read(index)}
                class="btn btn-outline-primary my-3"
              >
                Mark as read
              </button>
            </div>
          )}
        </div>
        <div class="card-footer text-muted">
          Received at {message.timestamp}
        </div>
      </div>
    );
  }
  return <></>;
};

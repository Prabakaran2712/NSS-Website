const MessagesList = ({ messages, read, showOnlyUnread }) => {
  return (
    <div>
      {messages &&
        messages.map((message, index) => (
          <MessageCard
            message={message}
            index={index}
            read={read}
            showOnlyUnread={showOnlyUnread}
          />
        ))}
    </div>
  );
};

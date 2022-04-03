const ReadCheckBox = ({ showOnlyUnread, setShowOnlyUnread }) => {
  return (
    <div>
      <input
        type="checkbox"
        onClick={(e) => setShowOnlyUnread(e.target.checked)}
        id="show-only-unread"
        checked={showOnlyUnread}
      />
      <label for="show-only-unread" class="text-muted">
        Show only unread messages
      </label>
    </div>
  );
};

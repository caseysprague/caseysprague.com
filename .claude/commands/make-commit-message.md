---
description: Generate a git commit message from staged changes
---

Review the staged changes and document a 50 character or less summary with a single paragraph below for a git commit message on what exactly is happening here. Edit `.gitmessage` with the result.

Follow the project's git commit guidelines:
- Separate subject from body with a blank line
- Limit the subject line to 50 characters
- Capitalize the subject line
- Do not end the subject line with a period
- Use the imperative mood in the subject line
- Use the body to explain what and why vs. how
- The subject line should complete: "If applied, this commit will {your subject line here}"
- Write body as clean prose, avoid bullet points or lists
- Be concise while still explaining the what and why
- Remove unnecessary explanatory text that doesn't add value
- Focus on the core change and its business value
- Do not apply any wrapping to the body, as the editor will handle that
- Do not include "Generated with [Claude Code](https://claude.com/claude-code)"
- Do not include "Co-Authored-By: Claude <noreply@anthropic.com>"
- Write for future me - assume I understand the codebase
- Document the non-obvious reasoning (the 'why' not visible in the diff itself)
- Skip explanations of what the code does - I can read the code
- Avoid phrases like "this enables developers to" or "this allows users to."
- Remember, I am a development team of one.
